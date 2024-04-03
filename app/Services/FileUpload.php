<?php 

namespace App\Services;

use Illuminate\Http\Request;

class FileUpload{

    public function upload($file, string $location): string{
            $filename = $file->hashName();
            // Upload file
            $file->move($location, $filename);
            return $location.$filename;
    }

}