<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Spatie\LaravelMarkdown\MarkdownRenderer;

class DocumentationController extends Controller
{
    protected $info = null;

    public function info($project, $version)
    {
        if (! isset($this->info)) {
            $this->info = json_decode(file_get_contents(resource_path("docs/{$project}/{$version}/info.json")), true);
        }

        return $this->info;
    }

    public function index($project, $version = 'v1'): RedirectResponse
    {
        $slug = $this->info($project, $version)['default_page'] ?? 'quickstart';

        return redirect()->route('docs.show', [$project, $version, $slug]);
    }

    protected function getIndex($project, $version = 'v1')
    {
        $index = file_get_contents(resource_path("docs/{$project}/{$version}/documentation.md"));

        $index = str_replace(['{{version}}', '{{project}}'], [$version, $project], $index);

        return app(MarkdownRenderer::class)
            ->toHtml($index);
    }

    protected function getPages($project, $version = 'beta')
    {
        $pages = collect();

        foreach (glob(resource_path("docs/{$project}/{$version}/*.md")) as $page) {
            $pages->add([
                'slug' => Str::slug(basename($page, '.md')),
                'file' => $page,
            ]);
        }

        return $pages;
    }

    public function show($project, $version = 'v1', $slug = null): View
    {
        $pages = $this->getPages($project, $version);

        $currentPage = $pages->firstWhere('slug', $slug ?? $this->info($project, $version)['default_page']);

        if (! $currentPage) {
            abort(404);
        }

        $content = file_get_contents($currentPage['file']);

        preg_match('/\# (?<title>[^\\n]+)/', $content, $page);

        return view('docs', [
            'index' => $this->getIndex($project, $version),
            'title' => $page['title'],
            'homepage' => url($this->info($project, $version)['homepage_path']),
            'project' => $project,
            'projectTitle' => $this->info($project, $version)['title'],
            'content' => app(MarkdownRenderer::class)
                ->toHtml($content),
        ]);
    }
}
