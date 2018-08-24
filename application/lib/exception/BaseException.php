<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/6/19 0019
 * Time: 16:37
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    //HTTP状态码
    public $code =400;
    //错误具体信息
    public $msg="参数错误";
    //自定义错误码
    public $errorCode =10000;

    public function __construct($params=[])
    {
        //判断是否为数组
        if (!is_array($params)) {
            return ;
        }
        if (array_key_exists('code', $params)) {
            $this->code=$params['code'];
        }
        if (array_key_exists('msg', $params)) {
            $this->msg=$params['msg'];
        }
        if (array_key_exists('errorCode', $params)) {
            $this->errorCode=$params['errorCode'];
        }

    }


}