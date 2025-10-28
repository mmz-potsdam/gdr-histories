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
        // currently hardwired for GDR-Site
        // if there are multipe aspect-ratios within a site, use php-ffmpeg/php-ffmpeg
        return '4x3';
    }
}
