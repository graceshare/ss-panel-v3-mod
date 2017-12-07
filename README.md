# 介绍

原作者有点呆, 各种环境 `require` 不写清楚


修复了环境问题, 尤其是 `slim` 问题 

1. 框架必须的文件夹

```
    cd $dir;
    mkdir storage
    chmod 777 storage
```

2. 数据库配置: 导入 `glzjin_all.sql` 后
3. 搭建 `nginx` `php-fpm` 使用

4. 依赖 `php composer.phar update`

5. 修改配置
```
    vim .env
    vim config/.config.php
```

6. 创建管理员

```
    php xcat createAdmin
```