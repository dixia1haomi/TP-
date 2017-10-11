<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11 0011
 * Time: 上午 6:31
 */

namespace app\validate;


use think\Validate;

class TestValidate extends BaseValidate
{
    //验证规则
    protected $rule = [
        'id'=>'max:2',
        'num'=>'max:2'
    ];
}