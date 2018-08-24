<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/8 0008
 * Time: 14:34
 */

namespace app\admin\validate;


class GongZhangValidate extends BaseValidate
{

    protected $rule = [
        'work_date'  => 'require',
        'name'   => 'require|max:10',
        'headimgurl' => 'require',
        'security'=>'require|number',
        'tx'=>'require|isPositiveInteger',
        'idCard'=>'require|isIdCard',
        'mobile'=>'require|isMobile'
    ];


    public function sceneEdit()
    {
        return $this->only(['mobile', 'headimgurl']);
    }
}