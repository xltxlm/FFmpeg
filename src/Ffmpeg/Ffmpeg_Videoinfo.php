<?php

namespace xltxlm\ffmpeg\Ffmpeg;

use xltxlm\ffmpeg\Exception\Exception_Fileerror;
use xltxlm\shell\Exception\Exception_Exec;
use xltxlm\shell\Exec;


/**
 * 获取视频的基础信息;
 */
class Ffmpeg_Videoinfo extends Ffmpeg_Videoinfo\Ffmpeg_Videoinfo_implements
{


    public function setFilePath(string $FilePath)
    {
        try {
            $json_info = (new Exec())
                ->setCmd("ffprobe -v quiet -print_format json -show_format -show_streams {$FilePath} 2>&1")
                ->setDebug($this->isdebug())
                ->__invoke();
        } catch (Exception_Exec $e) {
            throw new Exception_Fileerror($e->getMessage());
        }
        $video_info = json_decode($json_info, true);

        $this->filesize = $video_info['format']['size'];
        if ($this->filesize < 1) {
            throw new Exception_Fileerror($FilePath);
        }
        $this->bit_rate = $video_info['format']['bit_rate'];
        $this->width = $video_info['streams'][0]['width']?:$video_info['streams'][1]['width'];
        $this->height = $video_info['streams'][0]['height']?:$video_info['streams'][1]['height'];
        $this->duration = floor($video_info['format']['duration']);
        $this->aspect = sprintf('%.6f', $this->width / $this->height);
        return parent::setFilePath($FilePath);
    }

    public function __invoke(): \xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo
    {
        return $this;
    }


}