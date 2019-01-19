<?php

//获取添加的数据信息
$xh = $_GET['序号'];
$bh = $_GET['编号'];
$hgq = $_GET['烘干前'];//加密
$hgh = $_GET['烘干后'];
$psh = $_GET['泡水后'];
$tj = $_GET['体积'];
$xs = $_GET['吸水'];
$pjxs = $_GET['平均吸水'];
$hs = $_GET['含水'];
$pjhs = $_GET['平均含水'];
$md = $_GET['密度'];
$pjmd = $_GET['平均密度'];


//连接数据库
$link = mysqli_connect('localhost' , 'root' , '168168','mysql');

//判断是否连接成功
if(!$link){
    exit('连接数据库失败'.mysqli_connect_error());
}

//选择数据库
//mysqli_select_db($link , 'mysql');

//准备sql语句
$sql = "insert into edata (序号,编号,烘干前,烘干后,泡水后,体积,吸水,平均吸水,含水,平均含水,密度,平均密度) values('$xh','$bh','$hgq','$hgh','$psh','$tj','$xs','$pjxs','$hs','$pjhs','$md','$pjmd')";

//发送sql语句
$obj = mysqli_query($link , $sql);

if($obj){
    echo "添加成功<a href = 'index.php'>返回</a>";
}else{
    echo "添加失败";
}
mysqli_close($link);
?>
/**
 * Created by PhpStorm.
 * User: chimes
 * Date: 2019/1/18
 * Time: 20:56
 */