<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * @param $link
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     */
    public function getRedirect($link)
    {
        $link = Link::where('new_url', $link)->first();

        if ($link) {
            return redirect($link->base_url, 302);
        } else {
            return response()->json([
                'error' => 'The URL could not be found'
            ], 404);
        }
    }
}
