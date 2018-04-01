<?php
namespace app\admin\controller;

use think\Controller;

class Category extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function add()
    {
        return $this->fetch();
    }

    public function save()
    {
        //return $this->fetch();
        //print_r(input('post.'));
        $data=input('post.');
        $data['status']=10;
        $validate=validate('Category');
        if (!$validate->scene('add')->check($data)){
            $this->error($validate->getError());
        }

        //把$data提交个model
    }
}
