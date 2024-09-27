<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Menu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function deleteFile($url)
    {
        if(Storage::disk('public')->exists($url)){
            Storage::disk('public')->delete($url);
        }
    }
}
