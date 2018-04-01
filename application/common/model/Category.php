<?php
/**
 * Created by PhpStorm.
 * User: kaiend
 * Date: 2018/4/1
 * Time: 22:43
 */
namespace app\common\model;
use think\Model;

class Category extends Model
{
    protected $autoWriteTimestamp=true;
    public function add($data)
    {
        $data['status']=1;
        //$data['create_time']=time();
        return $this->save($data);

    }
    public function getNormalFirstCategory()
    {
        $data=[
            'status'=>1,
            'parent_id'=>0,

        ];
        $order=[
            'id'=>'desc',
        ];

        return $this->where($data)
            ->order($order)
            ->select();
    }

}