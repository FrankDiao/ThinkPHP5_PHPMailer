ThinkPHP5集成PHPMailer库发送邮件【附验证码示例】
===============

## 目录说明
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