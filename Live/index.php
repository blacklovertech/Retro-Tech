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
<?php require_once("include/header.php");?>

<!-- main header end -->
<!-- home start -->
<div id="siteUserNoticeContainer" class="siteUserNoticeContainer hideOnEmpty"></div>
<div class="sitebox">
    <div class="sectionheader">Introduction</div>
    <canvas class="homeSlideshowCanvas smoothImage" id="homeSlideshowCanvas" width="200" height="160"></canvas>
    <span style="font-weight: bold ; text-align: justify;">What is Retro Tech?</span><br><br> We're a
    site dedicated to retro (8bit, 16bit, 32bit, 64bit and beyond) coding
    tech app video game music. Most of what you'll find here are Program ,
    NES, SNES, Amiga, Mega Drive (Genesis) tracks, Application as well as
    music from more obscure systems and some older PC classics, although
    newer item may be added on occasion.
    If you would like any collections, tracks , code or games added then
    please use the
    <a href="forum/%26action%3Dshowforum%26id%3D2.html">request</a> page
    to let us know what we're missing! New Tech are added regularly so
    check back often. <br /><br />
    All music , video , code, app on this site is taken directly from the
    original media and encoded into mp3, mp4, txt, zip format.
    <br />
    We recommend using Chrome, Firefox or IE11+ to browse the site. We are
    not a Illegal or Hacker Group ,<br />
    for more visit<a href="forum/index.htm"> Forum .</a>
    <div style="clear: both"></div>
</div>
<!-- collection start -->
<?php include('page/newest.php');?>
<!-- Footer start -->
<?php include('include/footer.php');?>
<?php  
echo "</body></html> ";  
?>