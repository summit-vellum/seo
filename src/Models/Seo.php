<?php

namespace Quill\Seo\Models;

use App\User;
use Quill\Seo\Traits\HasSeo;
use Vellum\Models\BaseModel;

class Seo extends BaseModel
{
    use HasSeo;

    protected $table = 'metas';
    
}
