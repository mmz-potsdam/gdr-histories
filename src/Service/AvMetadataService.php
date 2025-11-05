<?php

// src/Service/AvMetadataService.php

namespace App\Service;

class AvMetadataService
{
    protected $options;

    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    public function getAspectRatio(string $fname): string|false
    {
        // currently hardwired for SOJ and HER Collection
        // if there are multiple aspect-ratios within a site, use php-ffmpeg/php-ffmpeg
        $basename = basename($fname, '.mp4');

        if ($basename >= 100 and $basename < 200) {
            // HER
            return '16x9';
        }

        return '4x3';
    }
}
