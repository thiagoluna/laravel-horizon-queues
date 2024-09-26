<?php

namespace App\Services\Images;

use App\Services\Images\Contracts\WaterMarkerInterface;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class InterventionImage implements WaterMarkerInterface
{
    public function make(string $path): void
    {
        $fullPath = Storage::path($path);
        // create an test image from a file
        $manager = ImageManager::gd();
        $img = $manager->read($fullPath);

        // create a new resized watermark instance and insert at bottom-right
        // corner with 10px offset and an opacity of 25%
        $img->place(
            public_path('default.png'),
            'bottom-right',
            10,
            10,
            25
        );

        //Save image updated
        $img->save($fullPath);
    }
}
