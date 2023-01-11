<?php

namespace App\Http\Controllers;

use App\Models\Escrito;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function store(Request $request)
    {
        $escrito = new Escrito();
        $escrito->id = 0;
        $escrito->exists = true;
        $image = $escrito->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' => $image->getUrl()
        ]);
    }
}
