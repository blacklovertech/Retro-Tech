<?php session_start();
include_once('include/config.php');
?>
                  
		<div class='sitebox'>
			<div class='sectionheader'><h1>All Music By Name</h1></div>
	<div class='jumpLinks'>Jump To: <a href='#num'>#</a> <a href='#a'>A</a> <a href='#b'>B</a> <a href='#c'>C</a> <a href='#d'>D</a> <a href='#e'>E</a> <a href='#f'>F</a> <a href='#g'>G</a> <a href='#h'>H</a> <a href='#i'>I</a> <a href='#j'>J</a> <a href='#k'>K</a> <a href='#l'>L</a> <a href='#m'>M</a> <a href='#n'>N</a> <a href='#o'>O</a> <a href='#p'>P</a> <a href='#q'>Q</a> <a href='#r'>R</a> <a href='#s'>S</a> <a href='#t'>T</a> <a href='#u'>U</a> <a href='#v'>V</a> <a href='#w'>W</a> <a href='#x'>X</a> <a href='#y'>Y</a> <a href='#z'>Z</a> </div>

<div id='num' class='listLetterHead'>#</div>
<hr>
<table class='listTable'>
	<tr>  
<?php 
$query=mysqli_query($con,"SELECT * FROM track");
while($result=mysqli_fetch_array($query))
{?>
<tr>
	<td class='longTrackCell'>
		<a class='showGameBox'  title="<?php echo $result['id'];?>" href='<?php echo $result['link'];?>'>
		<?php echo $result['name'];?></a>
	</td>
	<td></td>
	<td class='longTrackCell'><img class='blankimage platformIcon' src='/img/devnames/25.png'><?php echo $result['author'];?></td>
</tr>
<?php } ?> 
<tr>
<tr>
					<td class="shortTrackCell">
						<a class="showGameBox" data-boxhash="ad0f9584a1ed0aaea3dea594f40d1f2b" href="/music/510">
							1944: The Loop Master
						</a>
					</td>
					<td></td>
					<td class="shortTrackCell">
						<img class="blankimage platformIcon" src="/img/devnames/31.png" title="Arcade Consoles" alt="Arcade Consoles">
					</td>
					<td></td>
					<td class="shortTrackCell shortTrackAliases" title="Also known as..."></td>
				</tr>

					
				</table>
				<hr>    
</div><br>
  <form action="musicadd.php" method="post">
 
                
		 <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>link</label>
                            <input type="text" name="link" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>authpr</label>
                            <input type="text" name="author" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>

	 



