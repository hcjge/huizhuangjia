<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/8 0008
 * Time: 14:34
 */

namespace app\admin\validate;


class ShejishiValidate extends BaseValidate
{

    protected $rule = [
        'name'   => 'require|max:10',
        'headimgurl' => 'require',
        'intro'=>'require',
        'idCard'=>'require|isIdCard',
        'mobile'=>'require|isMobile'
    ];


    public function sceneEdit()
    {
        return $this->only(['mobile', 'headimgurl','intro','idcard']);
    }
}