<?php

namespace App\Http\Controllers\Web;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('web.home');
    }
}
