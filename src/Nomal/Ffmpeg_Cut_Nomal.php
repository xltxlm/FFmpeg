<?php

namespace xltxlm\ffmpeg\Nomal;

use xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
use xltxlm\fileinfo\Features\Fileinfo_tmp;
use xltxlm\fileinfo\Fileinfo;
use xltxlm\shell\Exec;


/**
 * 视频按照源视频的宽高比进行源比例压缩;
 */
Trait Ffmpeg_Cut_Nomal
{
    use Ffmpeg_Cut_Nomal\Ffmpeg_Cut_Nomal_implements;

    public function __invoke(): \xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo
    {
        //在同目录下,生成一个临时的文件
        $p240_file = (new Fileinfo_tmp($this->getFilePath()))
            ->__invoke();

        $Ffmpeg_Videoinfo = new Ffmpeg_Videoinfo($this->getFilePath());
        if (self::WIDTH && self::HEIGHT == 0) {
            $等比不变形压缩下的高度 = floor((self::WIDTH * $Ffmpeg_Videoinfo->getheight()) / $Ffmpeg_Videoinfo->getwidth());
            $等比不变形压缩下的宽度 = self::WIDTH;
        } else {
            $等比不变形压缩下的高度 = self::HEIGHT;
            $等比不变形压缩下的宽度 = floor((self::HEIGHT * $Ffmpeg_Videoinfo->getwidth()) / $Ffmpeg_Videoinfo->getheight());
        }

        (new Exec("ffmpeg -y -i {$this->getFilePath()}    -c:v libx264  -vf scale=\"" . $等比不变形压缩下的宽度 . ":-2\" -strict -2  $p240_file"))
            ->setDebug($this->isdebug())
            ->__invoke();

        $p240_mov = (new Fileinfo_tmp($this->getFilePath()))
            ->__invoke();

        //优化播放头
        (new Exec())
            ->setCmd("ffmpeg  -y  -i $p240_file -movflags +faststart  -acodec copy -vcodec copy    $p240_mov")
            ->setDebug($this->isdebug())
            ->__invoke();

        //删除掉过渡的文件
        (new Fileinfo($p240_file))
            ->Unlink();

        return new Ffmpeg_Videoinfo($p240_mov);
    }


}