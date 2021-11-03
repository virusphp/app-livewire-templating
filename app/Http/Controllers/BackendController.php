<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class BackendController extends Controller
{
    protected $limit = 10;

    function __construct()
    {
        // $this->middleware('auth:web')s
    }
    
    protected function bcrum($current, $urlSecond = null, $nameSecond = null)
    {
        return [
            'url-first' => "#",
            'name-first' => 'Home',
            'url-second' => $urlSecond,
            'name-second' => $nameSecond,
            'current' => $current
        ];
    }

    protected function notification($level, $title, $message)
    {
        return  Session::flash('flash_notification', [
            'title'   => $title,
            'level'   => $level,
            'message' => $message
        ]);
    }
}
