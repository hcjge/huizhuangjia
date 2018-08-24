<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/6/19 0019
 * Time: 16:35
 */

namespace app\lib\exception;


use think\exception\Handle;
use think\facade\Log;
use think\facade\Request;

class ExceptionHandler extends Handle
{

    public $code;
    public $msg;
    public $errorCode;

    public function render(\Exception $e)
    {

        if ($e instanceof BaseException) {
            $this->code=$e->code;
            $this->msg=$e->msg;
            $this->errorCode=$e->errorCode;
        }else{
            if (config('app_debug')) {
                return parent::render($e);
            }else{
                $this->code=500;
                $this->msg = "服务器内部错误";
                $this->errorCode=999;
//                $this->recordErrorLog($e);
            }
        }

        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'errorCode' => $this->errorCode,
            'request_url' => $request->url()
        ];
        return json($result, $this->code);


    }

//    private function recordErrorLog($e)
//    {
//
//        Log::init([
//            'type' => 'file',
//            'path'=>LOG_PATH,
//            'level'=>['error']
//
//        ]);
//        Log::record($e->getMessage(), "error");
//
//    }

}