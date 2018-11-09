<?php

namespace xltxlm\ffmpeg\test\Youtube\Ffmpeg_Youtube_240p;
use xltxlm\ffmpeg\Youtube\Ffmpeg_Youtube_240p;

/**
 *
 */
class shup240_141_0
{

    public function __invoke()
    {
        $Ffmpeg_Videoinfo = (new Ffmpeg_Youtube_240p(realpath(__DIR__ . '/../../tm.mp4')))
            ->__invoke();

        p($Ffmpeg_Videoinfo);
        assert($Ffmpeg_Videoinfo->getheight() == 240);
        p($Ffmpeg_Videoinfo->getheight());
    }

}

