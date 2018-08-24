<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/11 0011
 * Time: 16:16
 */

namespace app\admin\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected $message = [
        'id' => 'id必须为正整数',

    ];
}