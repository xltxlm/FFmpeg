<?php
namespace xltxlm\ffmpeg\Nomal\Ffmpeg_Nomal_480p;

use \xltxlm\ffmpeg\Ffmpeg\__to;
use \xltxlm\ffmpeg\Nomal\Ffmpeg_Cut_Nomal;
/**
 * :类;
 * 按照常规的方式缩放视频,不进行黑边补偿;
*/
abstract class Ffmpeg_Nomal_480p_implements
{
    /*  */
    public const WIDTH="854";
    /*  */
    public const HEIGHT="0";

    use __to;
    use Ffmpeg_Cut_Nomal;

}