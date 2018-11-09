<?php

namespace xltxlm\ffmpeg\test\Youtube\Ffmpeg_Youtube_720p;
use xltxlm\ffmpeg\Youtube\Ffmpeg_Youtube_720p;

/**
 *
 */
class p720_145_0
{

    public function __invoke()
    {
        $Ffmpeg_Videoinfo = (new Ffmpeg_Youtube_720p(realpath(__DIR__ . '/../../movie.mp4')))
            ->__invoke();

        p($Ffmpeg_Videoinfo);
        assert($Ffmpeg_Videoinfo->getheight() == 720);
        p($Ffmpeg_Videoinfo->getheight());
    }

}

