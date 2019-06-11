<?php
namespace xltxlm\ffmpeg\Nomal\Ffmpeg_Cut_Nomal;

/**
 * :Trait;
 * 视频按照源视频的宽高比进行源比例压缩;
*/
Trait Ffmpeg_Cut_Nomal_implements
{


/**
*  执行切割命令;
*  @return :\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
*/
abstract public function __invoke():\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
}