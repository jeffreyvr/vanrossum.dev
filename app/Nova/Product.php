<?php

namespace App\Nova;

use App\Product as EloquentProduct;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\NovaTranslatable\Translatable;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Translatable::make([
                Text::make('Title')->sortable(),

                Markdown::make('Text'),

                Text::make('Summary'),
            ]),

            Text::make('Slug')
                ->sortable()
                ->hideFromIndex()
                ->rules(['required', 'max:255']),

            Text::make('URL', function ($product) {
                return '<a href="'.route('products.show', $product).'" target="_blank">View</a>';
            })->asHtml(),

            File::make('Download')
                ->store(function (NovaRequest $request, EloquentProduct $product) {
                    return function () use ($request, $product): void {
                        $product
                            ->addMedia($request->file('download'))
                            ->toMediaCollection('product-download');
                    };
                })
                ->delete(function ($request, EloquentProduct $product) {
                    $product->deleteMedia($product->getFirstMedia('product-download'));

                    return [];
                }),

            Image::make('Image')
                ->store(function (NovaRequest $request, EloquentProduct $product) {
                    return function () use ($request, $product): void {
                        $product
                            ->addMedia($request->file('image'))
                            ->withResponsiveImages()
                            ->toMediaCollection('product-image');
                    };
                })
                ->thumbnail(function ($value) {
                    return $value;
                })
                ->preview(function ($value, $disk) {
                    return $value;
                })->delete(function ($request, EloquentProduct $product) {
                    $product->deleteMedia($product->getFirstMedia('product-image'));

                    return [];
                }),

            Text::make('Checkout Url')->hideFromIndex(),

            Text::make('Version')->hideFromIndex(),

            Select::make('Vendor')->options([
                'lemonsqueezy' => 'Lemon Squeezy',
            ])->displayUsingLabels()
                ->required(),

            Text::make('Vendor Product Id')->hideFromIndex(),

            Select::make('Status')->options([
                'draft' => 'Draft',
                'publish' => 'Publish',
            ])->displayUsingLabels(),

            Markdown::make('Changelog')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(NovaRequest $request): array
    {
        return [];
    }
}
