<?php
use think\Route;
Route::get('/','/vct');//vct首页
Route::get('/vct','www/index/index');//vct首页
Route::get('/purpose','www/purpose/index');//功能
Route::get('/security','www/security/index');//安全
Route::get('/about','www/about/index');//关于

Route::get('/table','www/index/table');//请求表格数据


Route::get('/test','www/test/index');//测试


?>
