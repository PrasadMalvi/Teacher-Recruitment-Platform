<?php $user_name=$_SESSION["uname"];?>
 
	 <header class="app-header"><a class="app-header__logo" href="./home.php"><img src="images/logo.jpg" align="top" height="95%" width="100%"></a><b><font color="#FFFFFF"><br> <div class="header_right">&nbsp;  Welcome <?php echo $user_name; ?></div></font></b>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
        <!--Notification Menu-->
        <li class="dropdown">
 
            <li><a class="dropdown-item" href="change pwd.php"><i class="fa fa-user fa-lg"></i> <font color="#FFFFFF"><b>Change Password</b></font></a></li>
            <li><a class="dropdown-item" href="../logout.php"><i class="fa fa-sign-out fa-lg"></i><font color="#FFFFFF"><b> Logout</b></font></a></li>       
        </li>
       
      </ul>
    </header>