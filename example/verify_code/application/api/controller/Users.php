<?php
/**
 * Copyright Frank.
 * Author: Frank
 * E-mail: frank_diao@126.com
 * Date: 2018/8/14/014
 * Time: 23:15
 */

namespace app\api\controller;

use app\common\controller\SendEmail;
use think\Controller;
use think\Validate;

class Users extends Controller
{
    //邮箱配置
    private $mail = [
        'host'        => 'smtp.163.com',//SMTP服务器地址
        'send_email'  => 'xxx@163.com',//发送邮件的邮箱账号
        'password'    => 'xxx',//发送邮件的邮箱密码（部分邮箱为授权码）
    ];

    public function sendMail(){
        $data = request()->param();

        //参数验证
        $validate = new Validate(['email'=>'require|email']);
        if(!$validate->check($data)){
            return result(400,$validate->getError());
        }

        //生成验证码
        $code = rand(10000,99999);

        //发送邮件
        $SendMail = new SendEmail();

        //邮件模板
        $html = $SendMail->emailTemp($code);

        //发送邮件
        $r = $SendMail->send($data['email'],$this->mail,'验证码',$html);

        if ($r){
            return result(200,'SUCCESS',['code'=>$code]);
        }

        return result(400,'ERROR');
    }
}