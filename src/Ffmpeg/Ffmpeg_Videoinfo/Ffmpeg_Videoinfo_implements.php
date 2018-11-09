<?php
namespace xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;

/**
 * 获取视频的基础信息;
*/
abstract class Ffmpeg_Videoinfo_implements
{



    /* @var string  视频文件的路径 */
        protected $FilePath = '';
    


    /**
     * @return string;
     */
    public function getFilePath():string    {
        return $this->FilePath;
    }






    /**
     * @param string $FilePath;
     * @return $this
     */
    public function setFilePath(string $FilePath)
    {
        $this->FilePath = $FilePath;
        return $this;
    }

    /* @var int  宽度 */
        protected $width = 0;
    


    /**
     * @return int;
     */
    public function getwidth():int    {
        return $this->width;
    }






    /**
     * @param int $width;
     * @return $this
     */
    protected function setwidth(int $width)
    {
        $this->width = $width;
        return $this;
    }

    /* @var string  高度 */
        protected $height = '';
    


    /**
     * @return string;
     */
    public function getheight():string    {
        return $this->height;
    }






    /**
     * @param string $height;
     * @return $this
     */
    protected function setheight(string $height)
    {
        $this->height = $height;
        return $this;
    }

    /* @var int  文件大小 */
        protected $filesize = 0;
    


    /**
     * @return int;
     */
    public function getfilesize():int    {
        return $this->filesize;
    }






    /**
     * @param int $filesize;
     * @return $this
     */
    protected function setfilesize(int $filesize)
    {
        $this->filesize = $filesize;
        return $this;
    }

    /* @var string  比特率 */
        protected $bit_rate = '';
    


    /**
     * @return string;
     */
    public function getbit_rate():string    {
        return $this->bit_rate;
    }






    /**
     * @param string $bit_rate;
     * @return $this
     */
    protected function setbit_rate(string $bit_rate)
    {
        $this->bit_rate = $bit_rate;
        return $this;
    }

    /* @var string  时长 */
        protected $duration = '';
    


    /**
     * @return string;
     */
    public function getduration():string    {
        return $this->duration;
    }






    /**
     * @param string $duration;
     * @return $this
     */
    protected function setduration(string $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     *   ;
     *   @return :\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
    */
    abstract public function __invoke():\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;

}