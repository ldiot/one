<?php
    function C($name, $method)
    {
        require_once('/libs/Controller/'.$name.'Controller.class.php');
        // $testController = new testController();
        // $testController->show();
        //eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');不安全
        $controller = $name.'Controller';
        $obj = new $controller();
        $obj->$method();
    }

    function M($name)
    {
    	require_once('/libs/Model/'.$name.'Model.class.php');
    	//$testModel = new testModel();
        $model = $name.'Model';
        $obj = new $model();
    	return $obj;
    }

    function V($name)
    {
    	require_once('/libs/View/'.$name.'View.class.php');
    	$view = $name.'View';
    	$obj = new $view();
    	return $obj;
    }

    function daddslashes($str)
    {
    	return (!get_magic_quotes_gpc())?addslashes($str):$str;
    }
    function ORG($path, $name, $params=array())
    {//path是路径，name是第三方类名，params是该类初始化的时候需要指定、赋值的属性，格式为array（属性名=>属性值，属性名2=>属性值2......
        require_once('libs/ORG/'.$path.$name.'.class.php');
        //eval('$obj = new '.$name.'();');
        $obj = new $name();
        if (!empty($params)) {
            foreach ($params as $key=>$value) {
                //eval('$obj->'.$key.' = \''.$value.'\';');
                $obj->$key = $value;
            }
            return $obj;
        }
    }