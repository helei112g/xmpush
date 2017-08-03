# 概述

目前国内消息推送，从稳定性、资费、到达率等标准来衡量，个人推荐 **小米推送** 。

由于小米官方没有提供composer的安装渠道。对于现代化的开发，非常不方便。

个人简单将小米推送代码加入一些composer信息后，可使用composer进行安装。

# 版本

composer版本 | 官方版本 | 修改日志 | 官方更新时间
--- | --- | --- | ---
v1.0.3 | 2.2.20版 | 支持多机房, 提高网络连通性, 保证Push API可用性；新增iOS10新字段的支持 | 2017.8.3 更新
v1.0.2 | 2.2.16版 | 关闭 小米 在http 请求中添加的打印信息 | 2016.3.28 更新
v1.0.1 | 2.2.16版 | 解决composer自动加载问题 | 2016.3.28 更新
v1.0.0 | 2.2.16版 | 新增对多包名发送alias/regid/topic消息的支持 | 2016.3.28 更新

# 通过composer进行安装

通过composer，这是制作本sdk的初衷，可以使用composer.json 声明依赖，或者运行下面的命令。SDK 包已经放到这里 riverslei/xmpush

```php
    composer require "riverslei/xmpush:~1.0.0"
```

放入composer.json文件中

```php
    "require": {
        "riverslei/xmpush": "~1.0.0"
    }
```

# 关于维护

当前版本，是： `PHP 2.2.20版 于2017.8.3更新`

我会长期维护 本 SDK与官方的同步。

# 承诺

所有核心代码均为小米源码，没有任何篡改，仅针对部分php特性进行处理

后期为了效率可能会改写为 php7 的版本。


# 下文为官方相关信息

* Android Client SDK文档：http://dev.xiaomi.com/doc/?p=544
* iOS Client SDK文档：http://dev.xiaomi.com/doc/?p=2995
* Unity接入指南（包含Android和iOS）：http://dev.xiaomi.com/doc/?p=6441
* Server SDK文档：http://dev.xiaomi.com/doc/?p=533

