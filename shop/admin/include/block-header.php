<?php
	defined('myeshop') or die('������ ��������!');
    
     $result1 = mysql_query("SELECT * FROM orders WHERE order_confirmed='no'",$link);
    $count1 = mysql_num_rows($result1);
    
    if ($count1 > 0) { $count_str1 = '<p>+'.$count1.'</p>'; } else { $count_str1 = ''; }
 
    $result2 = mysql_query("SELECT * FROM table_reviews WHERE moderat='0'",$link);
    $count2 = mysql_num_rows($result2);
    
    if ($count2 > 0) { $count_str2 = '<p>+'.$count2.'</p>'; } else { $count_str2 = ''; }
 
?>
<div id="block-header">

<div id="block-header1" >
<h3>E-SHOP. ������ ����������</h3>
<p id="link-nav" ><?php echo $_SESSION['urlpage']; ?></p> 
</div>

<div id="block-header2" >
<p align="right"><a href="administrators.php" >��������������</a> | <a href="?logout">�����</a></p>
<p align="right">�� - <span><?php echo $_SESSION['admin_role']; ?></span></p>
</div>

</div>

<div id="left-nav">
<ul>
<li><a href="orders.php">������</a><?php echo $count_str1; ?></li>
<li><a href="tovar.php">������</a></li>
<li><a href="reviews.php">������</a><?php echo $count_str2; ?></li>
<li><a href="category.php">���������</a></li>
<li><a href="clients.php">�������</a></li>
<li><a href="news.php">�������</a></li>
</ul>
</div>