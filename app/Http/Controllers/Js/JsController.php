<?php

namespace App\Http\Controllers\Js;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 链接两个数组
    public function concat()
    {
        $title = "concat";
        return view('Js.concat', compact('title'));
    }

    public function sortArray()
    {
        $title = "sortArray";
        return view('Js.sortArray', compact('title'));
    }

    public function vue()
    {
        return view('Vue.index');
    }
}
