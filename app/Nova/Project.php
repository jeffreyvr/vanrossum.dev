<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\NovaTranslatable\Translatable;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Project::class;

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
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Translatable::make([
                Text::make('Title')->sortable(),
                Markdown::make('Text')
                    ->hideFromIndex(),
            ]),

            Slug::make('Slug')->hideFromIndex(),

            Text::make('Client'),

            Text::make('Stack')->hideFromIndex(),

            Text::make('External Url')->hideFromIndex(),

            DateTime::make('Publish date')
                ->default(now()->format('Y-m-d H:i:s.u')),

            // DateTime::make('Updated At')->hideFromIndex(),

            Select::make('Status')->options([
                'draft' => 'Draft',
                'publish' => 'Publish',
            ])->displayUsingLabels(),

            Image::make('Image'),

            BelongsTo::make('User', 'author')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     */
    public function filters(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    public function lenses(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(NovaRequest $request): array
    {
        return [];
    }
}
