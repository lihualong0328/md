


<?php 
//把收到的post数据写入文本, 用telnet请求这里
//合并post是个数组，合并数组
$str = implode($_POST, "\n");
//把str写入文件
file_put_content("./post.txt", $str);
//echo "write ok";
print_r($str);
?> 

