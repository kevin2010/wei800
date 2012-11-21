<?php
/**
 * 此文件为默认配置文件，请勿修改
 */

return array(
    // 网站短描述
    'shortdesc' => '最专业的微信运营互推平台',
    // 记住用户登录状态的cookie时间
    'autoLoginDuration' => 3600 * 24 * 7,

    // 缓存数据目录
    'dataPath' => BETA_CONFIG_ROOT . DS . '..' . DS . 'data' . DS,
    // 上传文件保存目录及基本url地址，url后面要带/
    'uploadBasePath' => BETA_WEBROOT . DS . '..' . DS . 'uploads' . DS,
    'uploadBaseUrl' => 'http://f.weixin800.cn/',
    // 静态资源文件保存目录及基本url地址，url后面要带/
    'resourceBasePath' => BETA_WEBROOT . DS . '..' . DS . 'resources' . DS,
    'resourceBaseUrl' => 'http://s.weixin800.cn/',
    'themeBasePath' => BETA_WEBROOT . DS . '..' . DS . 'themes' . DS,
    'themeResourceBaseUrl' => 'http://s.weixin800.cn/themes/',

    /*
     * datetime format
    */
    'formatDateTime' => 'Y-m-d H:i:s',
    'formatShortDateTime' => 'm-d H:i',
    'formatDate' => 'Y-m-d',
    'formatShortDate' => 'm-d',
    'formatTime' => 'H:i:s',
    'formatShortTime' => 'H:i',
        
    'url_format' => 'get',
        
    // 推广账号默认单行显示数量
    'ad_weixin_default_line_show_count' => 0,
    
    // 简述中可以使用的html标签
    'mobileSummaryHtmlTags' => '<img>',
    
    // default param and value
    'beian_code' => '',
    'tongji_code' => '',
    'header_html' => '',
    'footer_after_html' => '',
    'footer_before_html' => '',
    'site_keywords' => '',
    'site_description' => '',
    'user_required_email_verfiy' => 0,
    'user_required_admin_verfiy' => 0,
    'auto_remote_image_local' => 0,
);
