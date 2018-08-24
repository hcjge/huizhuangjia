<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\facade\Route;

Route::post('admin/api/:version/gong_zhang','admin/:version.GongZhang/createGongZhang');
Route::put('admin/api/:version/gong_zhang/:id/edit','admin/:version.GongZhang/editGongZhang');




Route::post('api/:version/create_estimation_report','api/:version.Estimation/createEstimationReport');
