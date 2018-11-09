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

    /**
     *   ;
     *   @return :\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
    */
    abstract public function __Ffmpeg_Videoinfo():\xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;

}