<?php  
echo "<html> <!-- head start --><head>
 ";  
?>  

 <?php include('include/head.php');?>
 <?php  
echo "</head> ";  
?>
<!-- body start -->
<?php  
echo "<body> ";  
?>
<?php include('include/header.php');?>
<!-- main header end -->
<!-- home start -->

<img id='gameBoxHolder' class='gameBoxHolder' src='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' alt='Box Art'>
			<br>
			<div id='siteUserNoticeContainer' class='siteUserNoticeContainer hideOnEmpty'></div>
	<div class='sitebox'>
		<div class='sectionheader'>Search</div>
		<br>
		<form method='post' action='/list/' >
			Search <input type='search' id='searchbox' style='width: 300px; margin: 0 0 0 8px;' name='query' value='' autofocus=""> <input type='submit' name='submit' value='Search'>
		</form>
		
	</div>
	


<!-- Footer start -->
<?php include('include/footer.php');?>
<?php  
echo "</body></html> ";  
?>
	
	
		