<?php

namespace Quill\Seo\Http\Controllers;


class SeoController extends Controller 
{

    public function __construct()
    {
        # code...
    }

    public function index()
    {
        return view('seo::index');
    }

}