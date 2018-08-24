<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/8 0008
 * Time: 14:02
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{

    public $code =400;
    public $msg="参数错误";
    public $errorCode =10000;

}