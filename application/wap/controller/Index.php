<?php
namespace app\wap\controller;
use think\App;
use think\Controller;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/12/15
 * Time: 16:03
 */
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}