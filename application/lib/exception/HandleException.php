<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/9 0009
 * Time: 14:38
 */

namespace app\lib\exception;


class HandleException extends BaseException
{
    public $code =400;
    public $msg="操作出错";
    public $errorCode =20000;
}