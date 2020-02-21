<?php

namespace Quill\Seo\Traits;

use App\Http\Models\Meta;


trait HasSeo
{

    /**
     * Eloquent Builder for models with meta values.
     *
     * @return void
     */
    public function meta()
    {
        return $this->morphOne(Meta::class, 'metable');
    }
}
