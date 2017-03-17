<?php
    require('../smarty/Smarty.class.php');
    $smarty = new Smarty();
    //Smarty的自编口诀“五配置两方法”
    //五配置的介绍
    $smarty->left_delimiter = "{";//左定界符
    $smarty->right_delimiter = "}";//右定界符
    $smarty->template_dir = "tpl";//html模板的地址
    $smarty->compile_dir = "template_c";//模板编译成生成的文件
    $smarty->cache_dir = "cache";//缓存
    //以下是开启缓存的另两个配置，因为通常不用smarty的缓存机制，所以此项为了解
    // $smarty->caching = true;//开启缓存
    // $smarty->cache_lifetime = 120;//缓存时间
    $smarty->assign('str' ,'Hello，my name is HanMeimei。How are you? ');
    $smarty->display('content.tpl');