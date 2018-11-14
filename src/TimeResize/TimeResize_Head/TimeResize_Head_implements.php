<?php
namespace xltxlm\ffmpeg\TimeResize\TimeResize_Head;

use \xltxlm\ffmpeg\Ffmpeg\__to;
/**
 * 视频的时长进行剪切:去掉头部;
*/
abstract class TimeResize_Head_implements
{

    use __to;


    /* @var int  时间长度 */
        protected $second_length = 0;
    


    /**
     * @return int;
     */
    public function getsecond_length():int    {
        return $this->second_length;
    }






    /**
     * @param int $second_length;
     * @return $this
     */
    public function setsecond_length(int $second_length)
    {
        $this->second_length = $second_length;
        return $this;
    }

    /**
     *   ;
     *   @return :\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
    */
    abstract public function __invoke():\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;

}