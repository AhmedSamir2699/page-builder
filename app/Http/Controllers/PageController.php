<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;
use Dotlogics\Grapesjs\App\Traits\EditorTrait;
class PageController extends Controller
{
    use EditorTrait;
    public function editor(Request $request, Page $page)
    {
        return $this->show_gjs_editor($request, $page);
    }

    public function show(Page $page){
        $page =  $page->gjs_data;
        return view('vendor.laravel-grapesjs.show',['page'=>$page]);
    }
}