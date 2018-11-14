<?php

namespace xltxlm\ffmpeg\test\TimeResize\TimeResize_Head;

use xltxlm\ffmpeg\TimeResize\TimeResize_Head;

/**
 *
 */
class 剪切视频头部70秒_148_0
{

    public function __invoke()
    {
        //https://vjs.zencdn.net/v/oceans.mp4
        $Ffmpeg_Videoinfo = (new TimeResize_Head(realpath(__DIR__ . '/../../movie.mp4'), 70))
            ->__invoke();
        p($Ffmpeg_Videoinfo);
        assert($Ffmpeg_Videoinfo->getduration() == 18);
    }

}

