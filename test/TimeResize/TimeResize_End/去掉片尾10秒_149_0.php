<?php

namespace xltxlm\ffmpeg\test\TimeResize\TimeResize_End;

use xltxlm\ffmpeg\TimeResize\TimeResize_End;
use xltxlm\ffmpeg\TimeResize\TimeResize_Head;

/**
 *
 */
class 去掉片尾10秒_149_0
{

    public function __invoke()
    {
        //https://vjs.zencdn.net/v/oceans.mp4
        $Ffmpeg_Videoinfo = (new TimeResize_End(realpath(__DIR__ . '/../../oceans.mp4'), 10))
            ->__invoke();
        p($Ffmpeg_Videoinfo);
        assert($Ffmpeg_Videoinfo->getduration() == 36);
    }

}

