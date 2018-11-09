<?php
namespace xltxlm\ffmpeg\Youtube\Ffmpeg_Cut;

/**
 * 视频按照源视频的宽高比进行16:9压缩;
*/
Trait Ffmpeg_Cut_implements
{



    /**
     *   执行压缩算法;
     *   @return :\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
    */
    abstract public function __invoke():\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;

}