<?php 

   header("Content-type: text/html; charset=utf-8");

    require_once 'SqlHelper.class.php';

    $sqlhelper=new SqlHelper();
   // $sql="insert into test(name) VAlUES ('我是狗')";//增加
   // $sql="update chengji set name='宋德实'where id=10";
    $sql="select * from test";//查询

    $sqlhelper->cx($sql);



 ?>