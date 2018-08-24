<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/13 0013
 * Time: 14:44
 */

namespace app\admin\model;


use app\lib\exception\HandleException;

class Shejishi extends BaseModel
{

    public static function CreateShejishi($name,$idCard,$mobile,$intro,$headimgurl)
    {

        $mobileAlreadyExists = self::where('mobile', '=', $mobile)->find();
        $idCardAlreadyExists = self::where('idCard', '=', $idCard)->find();

        if ($mobileAlreadyExists) {
            throw new HandleException(['msg'=>'手机号码已存在']);
        }

        if ($idCardAlreadyExists) {
            throw new HandleException(['msg'=>'身份证号码已存在']);
        }


       $result= self::create(['name'=>$name,'idCard'=>$idCard,'mobile'=>$mobile,'intro'=>$intro,'headimgurl'=>$headimgurl]);

        if (!$result) {
            throw new HandleException();
        }

        return true;

    }

    public static function editShejishi($id,$name,$mobile,$idCard,$intro,$headimgurl)
    {

        $mobileAlreadyExists = self::where('mobile', '=', $mobile)->where('id','<>',$id)->find();
        $idCardAlreadyExists = self::where('idCard', '=', $idCard)->where('id','<>',$id)->find();
        if ($mobileAlreadyExists) {
            throw new HandleException(['msg'=>'手机号码已存在']);
        }
        if ($idCardAlreadyExists) {
            throw new HandleException(['msg'=>'身份证号码已存在']);
        }


        $result = self::update(['name'=>$name,'mobile'=>$mobile,'idCard'=>$idCard,'intro'=>$intro,'headimgurl'=>$headimgurl],['id'=>$id]);

        if (!$result) {
            throw new HandleException();
        }

        return true;


    }


    public static function deleteShejishi($id)
    {

        $shejishi = self::get(['id'=>$id]);

        if (!$shejishi) {
            throw new HandleException(['msg'=>'数据不存在，或者已被删除']);
        }

        $result = self::destroy(['id'=>$id]);

        if (!$result)
        {
            throw new HandleException();
        }
        return true;

    }




}