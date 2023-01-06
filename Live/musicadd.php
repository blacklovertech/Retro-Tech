<?php session_start();
include_once('include/config.php');

if(isset($_POST['submit']))
{  
     $name = $_POST['name'];
     $author = $_POST['author'];
     $link = $_POST['link'];
     $sql = "INSERT INTO music (name,author,link)
     VALUES ('$name','$author','$link')";
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}
?>
<?php
alert('succ');
header('Location: music.php');

exit;

?>