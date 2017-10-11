<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11 0011
 * Time: 上午 7:10
 */

namespace app\validate;


use app\exception\BaseException;
use app\exception\CheckParamException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){

        //获取参数
        $request = Request::instance()->param();
        //验证参数
        $result = $this->batch()->check($request);
        //判断验证是否通过
        if(!$result){
            //不通过，获取错误信息并抛出
            $e = new CheckParamException();
            $e->msg = $this->error;
            throw $e;

        }else{
            return true;
        }
    }
}