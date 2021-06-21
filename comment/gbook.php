<?php
$host='127.0.0.1';
$user='root';
$pwd='root';
$dbname='php10';
$db=new mysqli($host,$user,$pwd,$dbname);
// 檢查是否成功
if($db->connect_errno!==0){
  echo "連接失敗，";
  echo $db->connect_error;
  exit;
}
$sql="select * from msg order by id desc";
$mysqli_result=$db->query($sql);
if($mysqli_result===false){
  echo 'SQL錯誤';
  exit;
}
$rows=[];
while($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)){
  $rows[]=$row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>留言本</title>
</head>
<style>
.wrap {
  width: 600px;
  margin: 0 auto;
}

.add {
  overflow: hidden;
}

.add .content {
  width: 598px;
  margin: 0;
  padding: 0;
}

.add .user {
  float: left;
}

.add .btn {
  float: right;
}

.info {
  overflow: hidden;
}

.msg {
  margin: 20px 0px;
  background: #ccc;
  padding: 5px;
}

.msg .user {
  float: left;
  color: blue;
}

.msg .time {
  float: right;
  color: #999;
}

.msg .content {
  width: 100%;
  padding: 5px;
}
</style>

<body>
  <div class="wrap">
    <!-- 發表留言 -->
    <div class="add">
      <form action="save.php" method="post">
        <textarea name="content" class="content" cols="50" rows="5"></textarea>
        <input name="user" class="user" type="text">
        <input class="btn" type="submit" value="發表留言">
      </form>
    </div> <?php
    foreach($rows as $row){
    ?>
    <!-- 查看留言 -->
    <div class="msg">
      <div class="info">
        <span class="user"><?php echo $row['user'];?></span>
        <span
          class="time"><?php date_default_timezone_set("Asia/Taipei");echo date("Y-m-d H:i:s",$row['intime']);?></span>
      </div>
      <div class="content"><?php echo $row['content'];?></div>
    </div> <?php
    }
    ?>
  </div>
</body>

</html>