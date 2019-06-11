<?php
namespace xltxlm\ffmpeg\test\Nomal\Ffmpeg_Nomal_360p;

use xltxlm\ffmpeg\Nomal\Ffmpeg_Nomal_360p;

/**
*
*/
class p360_207_0{

    public function __invoke()
    {
        (new Ffmpeg_Nomal_360p(realpath(__DIR__ . '/../../movie.mp4')))
            ->__invoke();
    }

}

