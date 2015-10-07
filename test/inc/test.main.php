<?php

defined('COT_CODE') or die('Wrong URL.');


$t = new XTemplate(cot_tplfile("test", "module"));

$t->assign("TEST_TITLE", "Тестовый модуль!");


$a[] = array("title" => "Заголовок 1", "content" => "Описание 1");
$a[] = array("title" => "Заголовок 2", "content" => "Описание 2");
$a[] = array("title" => "Заголовок 3", "content" => "Описание 3");
$a[] = array("title" => "Заголовок 4", "content" => "Описание 4");


foreach($a as $k=>$v){
    $t->assign(array(
         "TEST_ROW_TITLE" => $v["title"]
        ,"TEST_ROW_DESC" => $v["content"]
    ));
    $t->parse("MAIN.ROW");
}
