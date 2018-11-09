<?php
namespace xltxlm\ffmpeg\Youtube\Ffmpeg_Youtube_240p;

use \xltxlm\ffmpeg\Ffmpeg\__to;
use \xltxlm\ffmpeg\Youtube\Ffmpeg_Cut;
/**
 * 用Youtube的标准来压缩视频,https://support.google.com/youtube/answer/6375112?co=GENIE.Platform%3DDesktop&hl=zh-Hans;
*/
abstract class Ffmpeg_Youtube_240p_implements
{
    public const WIDTH="426";
    public const HEIGHT="240";

    use __to;
    use Ffmpeg_Cut;


}