<?php

namespace xltxlm\ffmpeg\TimeResize;

use xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
use xltxlm\fileinfo\Features\Fileinfo_tmp;
use xltxlm\shell\Exec;

/**
 * 视频的时长进行剪切:去掉头部;
 */
class TimeResize_Head extends TimeResize_Head\TimeResize_Head_implements
{
    public function __construct(string $FilePath = '', int $second_length = 0)
    {
        if ($second_length) {
            $this->setsecond_length($second_length);
        }
        parent::__construct($FilePath);
    }

    public function __invoke(): Ffmpeg_Videoinfo
    {
        $localfile_new = (new Fileinfo_tmp($this->getFilePath()))
            ->__invoke();
        (new Exec())
            ->setCmd($cmd = "ffmpeg -ss {$this->getsecond_length()}  -i {$this->getFilePath()} -c copy {$localfile_new}")
            ->setDebug($this->getdebug())
            ->__invoke();

        return new Ffmpeg_Videoinfo($localfile_new);
    }


}