<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Http\Classes\PostsHeader;

class AdController extends Controller
{

    public function show(Request $request, $uuid) {

        $request->flashOnly('city', 'category', 'region', 'pmin', 'pmax');

        try {
            $ad = Ad::whereUuid($uuid)
                ->with('saler')
                ->firstOrFail();
        } catch (Exception $e) {
            return abort(404);
        }

    	return view('ads.show',compact('ad'));
    }
}
