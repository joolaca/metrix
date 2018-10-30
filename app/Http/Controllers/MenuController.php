<?php

namespace App\Http\Controllers;


class MenuController extends Controller
{

    function __construct() {

    }


    /** Frontenden előállítja a menüt
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderFrontendMenu(){

        return view('page/index/menu');
    }

}
