<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Support\Facades\Cache;

class YoutubeController extends Controller
{
    public function getYoutubeTrending($country_code)
    {
        // firstly check to see if we have already have a cache response for this country code
        if (Cache::has($country_code)) {
            $data  = Cache::get($country_code);
        } else {
            $resp = Youtube::getPopularVideos($country_code);
            Cache::put($country_code, $resp, 720);
            $data  = Cache::get($country_code);
        }
        return response()->json($data);
    }
}
