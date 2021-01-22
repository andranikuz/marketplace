<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Ad;
use App\Http\Classes\PostsHeader;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $params = $request->all();
        $request->flashExcept('page');

        try {
            $ads = Ad::searchE($params);
            $header = (new PostsHeader($params))->getHeader();
        } catch (Exception $e) {
            return abort(404);
        }

        return view('home', compact('ads', 'header'));
    }
}
