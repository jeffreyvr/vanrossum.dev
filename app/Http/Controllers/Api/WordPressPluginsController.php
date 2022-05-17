<?php

namespace App\Http\Controllers\Api;

use App\Clients\Github;
use App\WordPressPlugin;
use Illuminate\Http\Request;
use App\Clients\LemonSqueeze;
use App\Http\Controllers\Controller;

class WordPressPluginsController extends Controller
{
    public function show($slug)
    {
        $plugin = WordPressPlugin::where('slug', $slug)->firstOrFail();

        $plugin->download_url = route('wordpress.plugin.download', compact('slug'));

        unset($plugin->github_repository);
        unset($plugin->license);

        return $plugin;
    }

    public function download($slug)
    {
        $plugin = WordPressPlugin::where('slug', $slug)->firstOrFail();

        $github = new Github;
        $github->setRepository($plugin->github_repository);
        $release = $github->getRelease($plugin->version);
        $asset_id = '';

        foreach ($release->assets as $asset) {
            if ($asset->name == "{$plugin->slug}.zip") {
                $asset_id = $asset->id;
                break;
            }
        }

        return response()->streamDownload(function () use ($asset_id, $github) {
            echo $github->downloadAsset($asset_id);
        }, "{$plugin->slug}.zip");
    }
}
