<?php
namespace xltxlm\ffmpeg\Ffmpeg\__to;

/**
 * ;
*/
Trait __to_implements
{



    /* @var string   */
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

    /* @var bool  开启关闭命令行打印的调试信息 */
        protected $debug = false;
    


    /**
     * @return bool;
     */
    public function getdebug():bool    {
        return $this->debug;
    }


    public function isdebug():bool    {
            return $this->getdebug();
    }
    



    /**
     * @param bool $debug;
     * @return $this
     */
    public function setdebug(bool $debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     *   ;
     *   @return :\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
    */
    abstract public function __Ffmpeg_Videoinfo():\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;

    /**
     *   ;
     *   @return :\xltxlm\fileinfo\Fileinfo;
    */
    abstract public function __Fileinfo():\xltxlm\fileinfo\Fileinfo;

}