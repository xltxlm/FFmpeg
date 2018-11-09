<?php

namespace xltxlm\ffmpeg\Ffmpeg;


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


}