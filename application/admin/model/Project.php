<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/15 0015
 * Time: 17:23
 */

namespace app\admin\model;


use think\Model;

class Project extends BaseModel
{


    public function CreateProject($pic,$gongzhangId,$total_price,$ownersId,$location,$address,$community,$type,$area,$method,$use)
    {


        list($location_p, $location_c, $location_a) = $location;

        if ($type=1) {

        }




        self::create();

    }


}