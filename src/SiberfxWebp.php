<?php

namespace Siberfx\SiberfxWebp;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class SiberfxWebp extends Controller
{

    private $cwebpPath, $quality, $inputPath;

    public function __construct()
    {
        $this->cwebpPath = config('config-webp.cwebp_path');
        $this->quality = config('config-webp.default_quality');
    }

    public function make($inputPath)
    {
        $this->inputPath = $inputPath;

        return $this;
    }

    public function quality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    public function save($outputPath, $quality = null)
    {
        $thisQuality = $quality ? $quality : $this->quality;
        shell_exec($this->cwebpPath . ' -q ' . $thisQuality . ' ' . $this->inputPath . ' -o ' . $outputPath);

        if (\File::exists($outputPath)) {
            return true;
        } else {
            return false;
        }
    }
}
