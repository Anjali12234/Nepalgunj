<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function destroy(File $file)
    {
        $this->deleteFile($file->file);
        $file->delete();
        alert('file deleted successfully');
        return back();
    }
}
