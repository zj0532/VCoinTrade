<?php
namespace app\www\controller;
use think\Controller;
use think\Db;
use think\Request;
use app\www\model\TableModel;

class IndexController extends Controller
{

    private  $table;
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->table = new TableModel();
    }

    public function index(){
        return $this->fetch('index');
    }

    //请求表格数据
    public function table(){
//        $data = input();
        $rows= $this->table->select();

        echo json_encode($rows);

    }
}
