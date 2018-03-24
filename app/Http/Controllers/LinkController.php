<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLinks()
    {
        $links = Link::all();

        $collectedLinks = [];

        foreach ($links as $link) {
            $new = [
                'base_url' => $link->base_url,
                'new_url' => url() . '/r/' . $link->new_url,
                'created_at' => $link->created_at
            ];

            array_push($collectedLinks, $new);
        }

        return response()->json([
            'links' => $collectedLinks
        ], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createNewLink(Request $request)
    {
        $oldLink = Link::where('base_url', $request->get('base_url'))->first();
        if (! $oldLink) {
            $link = Link::create([
                'base_url' => $request->get('base_url'),
                'new_url' => str_random('5')
            ]);

            return response()->json([
                'base_url' => $link->base_url,
                'new_url' => url() . '/r/' . $link->new_url,
                'created_at' => $link->created_at

            ], 201);
        } else {
            return response()->json([
                'error' => 'This base url already exist.'
            ], 409);
        }
    }
}
