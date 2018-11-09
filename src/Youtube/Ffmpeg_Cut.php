<?php

namespace xltxlm\ffmpeg\Youtube;

use xltxlm\ffmpeg\Ffmpeg\Ffmpeg_Videoinfo;
use xltxlm\fileinfo\Features\Fileinfo_tmp;
use xltxlm\shell\Exec;


/**
 * 视频按照源视频的宽高比进行16:9压缩;
 */
Trait Ffmpeg_Cut
{
    use Ffmpeg_Cut\Ffmpeg_Cut_implements;


    public function __invoke(): Ffmpeg_Videoinfo
    {
        $p240_file = (new Fileinfo_tmp($this->getFilePath()))
            ->__invoke();


        $Ffmpeg_Videoinfo = new Ffmpeg_Videoinfo($this->getFilePath());
        //比例上比较小,所以拉宽
        $aspect = self::WIDTH / self::HEIGHT;
        if ($Ffmpeg_Videoinfo->getaspect() < $aspect) {
            $等比不变形压缩下的宽度 = floor((self::HEIGHT / $Ffmpeg_Videoinfo->getheight()) * $Ffmpeg_Videoinfo->getwidth());
            $scale = "{$等比不变形压缩下的宽度}x" . self::HEIGHT;
            $padwidth = floor((self::WIDTH - $等比不变形压缩下的宽度) / 2);
            $pad = "$padwidth:0";
        } else {
            //比例上比较大,所以拉高
            $等比不变形压缩下的高度 = floor((self::WIDTH / $Ffmpeg_Videoinfo->getwidth()) * $Ffmpeg_Videoinfo->getheight());
            $scale = self::WIDTH . "x{$等比不变形压缩下的高度}";
            $padheight = floor((self::HEIGHT - $等比不变形压缩下的高度) / 2);
            $pad = "0:$padheight";
        }


        (new Exec("ffmpeg -y -i {$this->getFilePath()}    -c:v libx264 -preset slow -profile:v main -vf 'scale=$scale,pad=" . self::WIDTH . ":" . self::HEIGHT . ":{$pad}:black' -aspect 16:9 $p240_file"))
            ->__invoke();

        $p240_mov = (new Fileinfo_tmp($this->getFilePath()))
            ->__invoke();

        //优化播放头
        (new Exec())
            ->setCmd("ffmpeg  -y  -i $p240_file -movflags +faststart  -acodec copy -vcodec copy    $p240_mov")
            ->__invoke();


        return new Ffmpeg_Videoinfo($p240_mov);
    }


}