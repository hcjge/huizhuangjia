<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/24 0024
 * Time: 16:25
 */

namespace app\api\service;


use app\api\model\Estimation as EstimationModel;

class Estimation
{
    public static function createEstimationReport($area)
    {

        $ett= EstimationModel::select();
        $aa= $ett[1]['amount_formula'];


        $gs =$area.'*'.$aa;

        print_r(eval("return $gs;"));   



//        print_r(bcmul(10,2));



//        print_r($aa);


//        print_r($ett->toArray());

    }


   public static function aaa ($a)
    {

        print_r($a);



    }


}