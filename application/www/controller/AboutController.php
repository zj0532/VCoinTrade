<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/12 0012
 * Time: 14:04
 */

namespace app\www\controller;


use think\Controller;

class AboutController extends Controller
{
    public function index(){
        return $this->fetch('index');
    }
}