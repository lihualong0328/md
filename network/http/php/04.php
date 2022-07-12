
<?php
//header('Location: www.baidu.com');//默认是302重定向
header('Location: http://www.baidu.com');//绝对路径

//指定用301重定向， ture指用301头信息替换原来的头信息
header('Location: http://www.baidu.com', true, 301);

header('Location: http://www.baidu.com', true, 307);


//对于一篇新闻，GET请求，重定向无所谓，都能看到原来请求
//如果是post数据
//如：表单提交到05.php，而05.php 重定向到 06.php
//导致数据丢了

>

