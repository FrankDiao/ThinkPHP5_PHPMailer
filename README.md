ThinkPHP5集成PHPMailer库发送邮件
===============
# 验证码示例说明

## 1. 目录说明
~~~
www  WEB部署目录
├─application           应用目录
│  ├─common             公共模块目录
│  │  └─controller      控制器目录
│  │      └─SendEmail.php   邮件发送控制器
│  │
│  ├─api                API模块（验证码示例模块）
│  │  ├─config.php      模块配置文件
│  │  └─controller      控制器目录
│  │      └─Users.php   用户控制器
│  │
├─extend                扩展类库目录
│  ├─PHPMailer           PHPMailer类库
│  │  └─src             PHPMailer
│  │      └─ ......
│  
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写

~~~

## 2. 配置说明
将 api模块下的 Users控制器的 mail成员变量配置为自己的邮箱信息；
```
    //邮箱配置
    private $mail = [
        'host'        => 'smtp.163.com',//SMTP服务器地址
        'send_email'  => 'xxx@163.com',//发送邮件的邮箱账号
        'password'    => 'xxx',//发送邮件的邮箱密码（部分邮箱为授权码）
    ];
```
SMTP服务开启方式参考此链接（以163邮箱为例）[163邮箱如何开启POP3/SMTP/IMAP服务？](http://help.163.com/10/0312/13/61J0LI3200752CLQ.html)


## 3. 发送邮件 
```
请求地址： /index.php/api/Users/sendMail
请求方式： POST/GET
```
 
 |参数|类型|说明|示例|
 |:---:|:--:|:---:|:---:|
 |email|String|接收邮箱|xxxx@xx.com|