<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageTrait{

    public function imagePath($files,$path)
    {
        return "uploads/".$files->storeAs($path,$files->getClientOriginalName(),'admin');
        // return $path.$files->getClientOriginalName();
    }
}