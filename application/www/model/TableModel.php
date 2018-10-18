<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/15 0015
 * Time: 13:36
 */

namespace app\www\model;


use think\Model;
use traits\model\SoftDelete;

class TableModel extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'vct_table';
    // 定义时间戳字段名
    protected $createTime = 'vt_create';
    protected $updateTime = 'vt_update';
    use SoftDelete;
    protected $deleteTime = 'vt_delete';
}