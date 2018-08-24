<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/8 0008
 * Time: 13:41
 */

namespace app\admin\model;


use app\lib\exception\HandleException;

class Gongzhang extends BaseModel
{

    public static function createGongZhang($name,$tx,$work_date,$headimgurl,$security,$idCard,$mobile)
    {

       $isCreate= self::where('idCard', '=',$idCard)->whereOr('mobile','=',$mobile)->find();

        if ($isCreate) {
            throw new HandleException(['msg' =>'请不要重复添加数据']);
        }

        $result= self::create(['name'=>$name,'tx'=>$tx,'work_date'=>$work_date,'headimgurl'=>$headimgurl,'security'=>$security,'idCard'=>$idCard,'mobile'=>$mobile]);

        if (!$result) {
            throw new HandleException();
        }

        return true;

    }


    public static function editGongZhang($id,$mobile,$headimgurl,$tx)
    {


        $where = [
            ['mobile','=',$mobile],
            ['id','<>',$id]
        ];

        $isCreate = self::where($where)->find();
        if ($isCreate) {
            throw new HandleException(['msg' =>'手机号码已存在']);
        }

        $result= self::update(['mobile'=>$mobile,'headimgurl'=>$headimgurl,'tx'=>$tx],['id'=>$id]);

        if (!$result) {
            throw new HandleException();
        }

        return true;


    }

    public static function deleteGongZhang($id)
    {

       $gongzhang =self::get(['id'=>$id]);
        if (!$gongzhang) {
            throw new HandleException(['msg'=>'数据不存在，或者已被删除']);
        }

       $result= self::destroy(['id'=>$id]);

        if (!$result) {
            throw new HandleException();
        }

        return true;
    }


}