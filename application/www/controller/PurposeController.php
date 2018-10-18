<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/11 0011
 * Time: 18:01
 */

namespace app\www\controller;


use think\Controller;

class PurposeController extends Controller
{
    public function index(){
        try{
            return $this->fetch('index');
        }catch (\Exception $e){

        }
    }
}