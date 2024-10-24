<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $image =  $request->upload->store('file/uploads', 'public');
        return ([
            'fileName'=>'file.jpg',
            'uploaded'=>1,
            'url' => Storage::disk('public')->url($image)
        ]);
    }
}
