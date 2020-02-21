<?php

namespace Quill\Seo\Resource;

use App\Http\Models\Type;
use Illuminate\Support\Facades\DB;use Quill\Html\Fields\Datetime;
use Quill\Html\Fields\ID;
use Quill\Html\Fields\Image;
use Quill\Html\Fields\Select;
use Quill\Html\Fields\Text;
use Quill\Html\Fields\Textarea;
use Quill\Html\Fields\Tinymce;
use Quill\Seo\Models\Seo;
use Quill\Status\Models\Status;
use Vellum\Contracts\Formable;

class SeoResource extends Seo implements Formable
{
    public function fields()
    {
        return [
            ID::make()->sortable()->searchable(),
            Text::make('Title')
                ->rules('required','unique:posts','max:255')
                ->help('The ideal length of an article title is between 55-65 characters. This will appear in all widgets within the site.')
                ->searchable(),

            Textarea::make('Keyword')->searchable(),

            Textarea::make('Description'),

            // Select::make('Status', 'status_id')
            // 	->with('status', function($status){
            //         return $status->name;
            //     })
            //     ->options(Status::class),

        ];
    }

    public function filters()
    {
        return [
           //...
        ];
    }

    public function actions()
    {
        return [
           //...
        ];
    }
}
