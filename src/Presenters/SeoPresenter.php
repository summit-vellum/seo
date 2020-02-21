<?php

namespace Quill\Seo\Presenters;

use App\Http\Models\Status;
use McCool\LaravelAutoPresenter\BasePresenter;
use Quill\Seo\Models\Seo;

class SeoPresenter extends BasePresenter
{
    public function title()
    {
        $editUrl = route('seo.show', $this->wrappedObject->id);

        return " <a href='{$editUrl}' class='text-blue-600 font-semibold'>{$this->wrappedObject->title}</a>";
    }

    public function status()
    {
        $statusId = $this->wrappedObject->status;

        // return Status::all()[$statusId];
        return status_icon(
                $this->wrappedObject->status, 
                $this->wrappedObject->published_at
            ) . Status::all()[$statusId] ;
    }

}
