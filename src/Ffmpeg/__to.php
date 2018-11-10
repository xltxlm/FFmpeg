<?php

namespace xltxlm\ffmpeg\Ffmpeg;

use xltxlm\fileinfo\Fileinfo;


/**
 * ;
 */
Trait __to
{
    use __to\__to_implements;

    /**
     * Videoinfo constructor.
     */
    public function __construct(string $FilePath = '')
    {
        if ($FilePath) {
            $this->setFilePath($FilePath);
        }
    }

    public function __Ffmpeg_Videoinfo(): \xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo
    {
        return new \xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo($this->getFilePath());
    }

    public function __Fileinfo(): \xltxlm\fileinfo\Fileinfo
    {
        return (new Fileinfo($this->getFilePath()));
    }


}