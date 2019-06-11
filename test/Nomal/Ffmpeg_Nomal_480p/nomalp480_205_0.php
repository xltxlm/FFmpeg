<?php
namespace xltxlm\ffmpeg\test\Nomal\Ffmpeg_Nomal_480p;

use xltxlm\ffmpeg\Nomal\Ffmpeg_Nomal_480p;

/**
*
*/
class nomalp480_205_0{

    public function __invoke()
    {
        (new  Ffmpeg_Nomal_480p(realpath(__DIR__ . '/../../movie.mp4')))
            ->__invoke();
    }

}

