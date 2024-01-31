<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse  mb-3">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
     <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="navbar-collapse collapse" id="collapsingNavbar">
      <ul class="navbar-nav">
        <li class="nav-item active" class="top">
           <h2 a class="nav-link" href="dashboard.php" style="color: black;font-weight: 550;font-family: Arial, Helvetica, sans-serif;"
}">Library Management System 📚<span class="sr-only">LMS</span></a></h2>
        </li>       
      </ul> 	  
	  <ul class="navbar-nav ml-auto">
		<?php if(!empty($_SESSION) && $_SESSION["userid"]) { ?>
			<li class="nav-item">
				<a class="nav-link" style="color: black";><i class="fa-solid fa-user"></i><?php echo ucfirst($_SESSION["name"]); ?> |</a>
			</li>		
			<li class="nav-item">
			  <a class="nav-link" href="logout.php" style="color: black";>Logout</a>         
			</li>
		<?php } else { ?>
			<li class="nav-item">
				  <a class="nav-link" href="index.php">Login</a>         
			</li>
		<?php } ?>
      </ul>	  
    </div>
  </nav>