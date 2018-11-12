<?php

namespace xltxlm\ffmpeg\Exception;

use xltxlm\exception\Exception;


/**
 * 传入的文件不是合法的视频文件;
 */
class Exception_Fileerror extends Exception
{
    use Exception_Fileerror\Exception_Fileerror_implements;


}