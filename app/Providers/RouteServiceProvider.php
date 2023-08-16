<?php

namespace App\Providers;

use App\Post;
use App\Product;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        $this->registerRouteModelBindings();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    public function registerRouteModelBindings()
    {
        $this->registerPostSlugRouteModelBinding();
        //        $this->registerProductSlugRouteModelBinding();
    }

    protected function registerPostSlugRouteModelBinding()
    {
        Route::bind('postSlug', function ($slug) {
            $post = Post::findByIdSlug($slug);

            if (! $post) {
                abort(404);
            }
            if (! $post->status == 'publish') {
                abort(404);
            }

            return $post;
        });
    }

    protected function registerProductSlugRouteModelBinding()
    {
        Route::bind('productSlug', function ($slug) {
            $product = Product::findByIdSlug($slug);

            if (! $product || $product->status != 'publish') {
                abort(404);
            }

            return $product;
        });
    }
}
