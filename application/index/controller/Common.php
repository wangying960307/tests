<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/12/15
 * Time: 16:10
 */

namespace app\index\controller;


use think\Controller;

class Common extends Controller
{
    public function initialize()
    {
        if(isMobile()){
            $this->redirect('wap/index/index');
        }

    }
}