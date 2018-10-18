<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/18 0018
 * Time: 13:46
 */

namespace app\www\controller;


use think\Controller;

class TestController extends Controller
{
    public function index(){
        return $this->fetch('index');
    }
}