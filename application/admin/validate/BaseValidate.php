<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/8 0008
 * Time: 13:46
 */

namespace app\admin\validate;


use app\lib\exception\ParameterException;
use think\facade\Request;
use think\Validate;


class BaseValidate extends Validate
{

    public function goCheck()
    {

        $params = Request::param();
        $result = $this->batch()->check($params);
        if (!$result) {
            throw new ParameterException(['msg'=>$this->error]);
        }else{
            return true;
        }

    }

    public function getDataByRule($arrays)
    {
        if (array_key_exists('user_id', $arrays) | array_key_exists('uid', $arrays)) {
            throw new ParameterException([
                'msg'=>'参数中含有非法参数名'
            ]);
        }
        $newArray = [];
        foreach ($this->rule as $key => $value) {
            $newArray[$key] = $arrays[$key];
        }
        return $newArray;
    }

    protected function isPositiveInteger($value)
    {

        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }else{
            return false;
        }
    }

    protected function isNotEmpty($value)
    {
        if(empty($value)){
            return false;
        }else{
            return true;
        }
    }

    protected function isMobile($value)
    {
        $rule = '^1(3|4|5|7|8)[0-9]\d{8}$^';
        $result=preg_match($rule,$value);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    protected function isIdCard($value)
    {

        $rule = '^[1-9]{1}([0-9X]{14}|[0-9X]{17})$^';

        $result = preg_match($rule, $value);
        if ($result) {
            return true;
        }
        return false;

    }


}