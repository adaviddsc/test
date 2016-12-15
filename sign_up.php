<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$telephone = $_POST['telephone'];

if($username != null && $password != null && $telephone != null)
{
        //新增資料進資料庫語法
        $sql = "insert into account (username, password, telephone) values ('$username', '$password', '$telephone')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=home.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=home.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>