<?php
namespace xltxlm\ffmpeg\test\Nomal\Ffmpeg_Nomal_240p;

use xltxlm\ffmpeg\Nomal\Ffmpeg_Nomal_240p;

/**
*
*/
class p240_206_0{

    public function __invoke()
    {
        (new Ffmpeg_Nomal_240p(realpath(__DIR__ . '/../../movie.mp4')))
            ->__invoke();
    }

}

