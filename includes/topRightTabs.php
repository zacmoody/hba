<?php
session_start();
?>
<ul class="list-inline pull-right" style="margin-top:4px;">
<?php
if(isset($_SESSION['userName'])) {
?>
<!-- ************** to be enabled after yu login/signup -->
  <li><span><a data-toggle="modal" href='.login-modal'><?php echo($_SESSION['firstName'].' '.$_SESSION['lastName']);?></a><small>|</small><a href='logout.php'>Logout</a></span></li>
<?php
}
else {
?>
<!-- ************** to be enabled after yu login/signup -->
  <li><?php echo $_SESSION['message']; ?><span><a data-toggle="modal" href='.login-modal'>Log in</a><small>or</small><a data-toggle="modal" href='#signup'>Signup</a></span></li>
<?php
}
?>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown disabled"><i class="fa fa-shopping-cart"></i>$0</a>                   
  </li>

</ul>
