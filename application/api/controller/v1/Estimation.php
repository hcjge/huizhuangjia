<?php
/**
 * Created by PhpStorm.
 * User: HCJ
 * Date: 2018/8/24 0024
 * Time: 16:24
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\service\Estimation as EstimationService;

class Estimation extends BaseController
{


    public function createEstimationReport($area)
    {

        EstimationService::createEstimationReport($area);

    }


}