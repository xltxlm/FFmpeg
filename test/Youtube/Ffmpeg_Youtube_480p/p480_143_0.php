<?php

namespace xltxlm\ffmpeg\test\Youtube\Ffmpeg_Youtube_480p;
use xltxlm\ffmpeg\Youtube\Ffmpeg_Youtube_480p;

/**
 *
 */
class p480_143_0
{

    public function __invoke()
    {
        $Ffmpeg_Videoinfo = (new Ffmpeg_Youtube_480p(realpath(__DIR__ . '/../../movie.mp4')))
            ->__invoke();

        p($Ffmpeg_Videoinfo);
        assert($Ffmpeg_Videoinfo->getheight() == 480);
        p($Ffmpeg_Videoinfo->getheight());
    }

}

