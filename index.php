<?php
#连接数据库
$conn = mysqli_connect("localhost","root","168168");

#判断是否连接成功
if(!$conn){
    echo "失败";
}

//选择数据库
mysqli_select_db($conn,"mysql");

//准备sql语句
$sql = "select * from edata";

//发送sql语句
$obj = mysqli_query($conn,$sql);

echo "<center>";
echo "<table border = 1 cellspacing = '0' cellpadding = '10'>";
echo "<th>序号</th><th>编号</th><th>烘干前</th><th>烘干后</th><th>泡水后</th><th>体积</th><th>吸水</th><th>平均吸水</th><th>含水</th><th>平均含水</th><th>密度</th><th>平均密度</th>";
while($row = mysqli_fetch_assoc($obj)){
    echo "<tr>";
    echo '<td>'.$row['序号'].'</td>';
    echo '<td>'.$row['编号'].'</td>';
    echo '<td>'.$row['烘干前'].'</td>';
    echo '<td>'.$row['烘干后'].'</td>';
    echo '<td>'.$row['泡水后'].'</td>';
    echo '<td>'.$row['体积'].'</td>';
    echo '<td>'.$row['吸水'].'</td>';
    echo '<td>'.$row['平均吸水'].'</td>';
    echo '<td>'.$row['含水'].'</td>';
    echo '<td>'.$row['平均含水'].'</td>';
    echo '<td>'.$row['密度'].'</td>';
    echo '<td>'.$row['平均密度'].'</td>';
    echo '<td><a href = "del.php?id='.$row['序号'].'">删除</a>/<a href = "update.php?id='.$row['序号'].'">修改</a></td>';
    echo "</tr>";
}

echo "</table>";
echo "<a href = 'add.php'>添加</a>";
echo "<center>";

//关闭连接
mysqli_close($conn);
?>
/**
 * Created by PhpStorm.
 * User: chimes
 * Date: 2019/1/18
 * Time: 19:59
 */