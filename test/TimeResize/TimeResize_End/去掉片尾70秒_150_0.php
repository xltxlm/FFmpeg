<?php

namespace xltxlm\ffmpeg\test\TimeResize\TimeResize_End;
use xltxlm\ffmpeg\TimeResize\TimeResize_End;

/**
 *
 */
class 去掉片尾70秒_150_0
{

    public function __invoke()
    {
        //https://vjs.zencdn.net/v/oceans.mp4
        $Ffmpeg_Videoinfo = (new TimeResize_End(realpath(__DIR__ . '/../../movie.mp4'), 70))
            ->__invoke();
        p($Ffmpeg_Videoinfo);
        assert($Ffmpeg_Videoinfo->getduration() == 17);
    }

}

