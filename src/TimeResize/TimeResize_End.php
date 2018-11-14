<?php

namespace xltxlm\ffmpeg\TimeResize;

use \xltxlm\ffmpeg\Ffmpeg\__to;
use xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
use xltxlm\fileinfo\Features\Fileinfo_tmp;
use xltxlm\shell\Exec;

/**
 * 视频的时长进行剪切:去掉尾部;
 */
class TimeResize_End extends TimeResize_End\TimeResize_End_implements
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


        $getduration = (new Ffmpeg_Videoinfo($this->getFilePath()))
                ->getduration() - $this->getsecond_length();

        (new Exec())
            ->setCmd($cmd = "ffmpeg -ss 00:00:00  -t $getduration -i {$this->getFilePath()} -c copy {$localfile_new}")
            ->setDebug($this->getdebug())
            ->__invoke();
        return new Ffmpeg_Videoinfo($localfile_new);
    }


}