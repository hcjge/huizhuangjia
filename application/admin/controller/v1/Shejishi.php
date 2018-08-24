<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/13 0013
 * Time: 14:42
 */

namespace app\admin\controller\v1;


use app\admin\controller\BaseController;
use app\admin\model\Shejishi as ShejishiModel;
use app\admin\validate\IDMustBePositiveInt;
use app\admin\validate\ShejishiValidate;
use app\lib\exception\SuccessMessage;

class Shejishi extends BaseController
{

    public function createShejishi($name,$idCard,$mobile,$intro,$headimgurl)
    {
        (new ShejishiValidate())->goCheck();
        ShejishiModel::CreateShejishi($name,$idCard,$mobile,$intro,$headimgurl);
        return new SuccessMessage();
    }

    public function editShejishi($id,$idCard,$mobile,$intro,$headimgurl)
    {
        (new IDMustBePositiveInt())->goCheck();
        (new ShejishiValidate())->scene('edit')->goCheck();
        ShejishiModel::editShejishi($id, $idCard, $mobile, $intro, $headimgurl);
        return new SuccessMessage();
    }

    public function deleteShejishi($id)
    {
        (new IDMustBePositiveInt())->goCheck();

    }


}