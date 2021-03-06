# 2018年西安交通大学校运动会新闻宣传网站
----
## 环境需求
<https://laravel.com/docs/5.5>  

 `PHP >= 7.1.3`  
 `PDO PHP Extension`  
 `OpenSSL PHP Extension`  
 `Mbstring PHP Extension`  
 `Tokenizer PHP Extension`  
 `XML PHP Extension`
 
 ## 部署
 
 运行命令 `composer install`  
 运行命令 `chmod 777 storage -R`  
 运行命令 `chmod 777 bootstrap/cache -R`  
 
 新建数据库与数据库用户  
 复制 .env.example 到 .env  
 修改 .env 中的配置项  
 
 运行命令 `php artisan key:generate`  
 运行命令 `php artisan migrate`  
 运行命令 `php artisan storage:link`  
 
 ## 开发人员
 * 产品：Zhang Jiaxing  
 * 视觉：  
 * 后端：[f(x,z)=xzx](https://github.com/XuZhixuan)
 * 前端：[tw2016xjtu](https://github.com/tw2016xjtu)
 
 ## LICENSE
 Copyright (c) 2018 eeyes.net
 
 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:
 
 The above copyright notice and this permission notice shall be included in all
 copies or substantial portions of the Software.
 
 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.