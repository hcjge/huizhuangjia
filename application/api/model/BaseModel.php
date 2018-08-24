<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/24 0024
 * Time: 16:28
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected $autoWriteTimestamp = true;
}