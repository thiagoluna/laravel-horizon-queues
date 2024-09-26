<?php

namespace App\Services\Images\Contracts;

interface WaterMarkerInterface
{
    public function make(string $path): void;
}
