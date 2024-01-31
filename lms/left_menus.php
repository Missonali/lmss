
<div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
<ul class="nav flex-column pl-1">			
<?php if($user->isAdmin()) { ?>		
<li class="nav-item"><a class="nav-link" href="dashboard.php" style="color: white;"><i class="fa-solid fa-house"> <strong >Dashboard</strong></i></a></li>
<li class="nav-item" >
	<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa-solid fa-book" style="color: white;"> Book ⇶</i></a>
	<ul class="list-unstyled flex-column pl-3 collapse show" id="submenu1" aria-expanded="false">
		<li  class="nav-item"><a class="nav-link" href="books.php" style="color: white;"><strong>Manage Books</strong></a></li>
		<li class="nav-item"><a class="nav-link" href="category.php" style="color: white;"><strong>Category</strong></a></li>
		<li class="nav-item"><a class="nav-link" href="author.php" style="color: white;"><strong>Author</strong></a></li>
		<li class="nav-item"><a class="nav-link" href="publisher.php" style="color: white;"><strong>Publisher</strong></a></li>
	</ul>
</li>
<li class="nav-item"><a class="nav-link" href="issue_books.php" style="color: white;"><strong><i class="fa-solid fa-book"> Issue Book</i></strong></a></li>
<li class="nav-item"><a class="nav-link" href="user.php" style="color: white;"><strong><i class="fa-solid fa-user"> User</i></strong></a></li>
<li class="nav-item"><a class="nav-link" href="logout.php" style="color: white;"><strong><i class="fa-solid fa-right-from-bracket"> Logout</i></strong></a></li>
<?php } else { ?>

<?php } ?>
</ul>
</div>




