<?php

namespace xltxlm\ffmpeg\test\Youtube\Ffmpeg_Youtube_360p;

use xltxlm\ffmpeg\Youtube\Ffmpeg_Youtube_360p;

/**
 *
 */
class p360_142_0
{

    public function __invoke()
    {
        $Ffmpeg_Videoinfo = (new Ffmpeg_Youtube_360p(realpath(__DIR__ . '/../../movie.mp4')))
            ->__invoke();

        p($Ffmpeg_Videoinfo);
        assert($Ffmpeg_Videoinfo->getheight() == 360);
        p($Ffmpeg_Videoinfo->getheight());
    }

}

