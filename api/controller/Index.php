<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11 0011
 * Time: 上午 5:10
 */

namespace app\api\controller;



use app\exception\BaseException;
use app\exception\testException;
use app\validate\TestValidate;

use app\api\model\Index as IndexModel;
use think\Exception;

class Index
{
    /**
     * @url hello/:id
     * @http GET
     * @id id
     */
    public function index()
    {
        //实例化验证层并验证，通过返回true
        (new TestValidate())->goCheck();

        $getindex = IndexModel::getIndex();
        if(!$getindex){
            throw new Exception();
        }
        return $getindex;


    }
}