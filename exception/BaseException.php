<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11 0011
 * Time: 上午 8:49
 */

namespace app\exception;




use think\Exception;

class BaseException extends Exception
{
    public $code = 400;

    public $msg = 'BaseMsg';

    public $errorCode = 10000;

}