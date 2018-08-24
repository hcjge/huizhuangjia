<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/8 0008
 * Time: 11:36
 */

namespace app\admin\controller\v1;


use app\admin\controller\BaseController;
use app\admin\validate\GongZhangValidate;
use app\admin\model\Gongzhang as GongZhangModel;
use app\admin\validate\IDMustBePositiveInt;
use app\lib\exception\SuccessMessage;

class GongZhang extends BaseController
{

    public function createGongZhang($name,$tx,$work_date,$headimgurl,$security,$idCard,$mobile)
    {

        (new GongZhangValidate())->goCheck();
        GongZhangModel::createGongZhang($name,$tx,$work_date,$headimgurl,$security,$idCard,$mobile);
        return new SuccessMessage();
    }

    public function editGongZhang($id,$mobile,$headimgurl,$tx)
    {
        (new IDMustBePositiveInt())->goCheck();
        (new GongZhangValidate())->scene('edit')->goCheck();
        GongZhangModel::editGongZhang($id,$mobile,$headimgurl,$tx);
        return new SuccessMessage();
    }


    public function createGongZhangProject($pic,$gongzhangId,$total_price,$ownersId,$location,$address,$community,$type,$area,$method,$use)
    {




    }
  


}