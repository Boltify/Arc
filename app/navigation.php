<?php

if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
   	$page = '1';
}


echo "<ul>";
$sql = ("SELECT * FROM arc_pages");
foreach ($db->query($sql) as $row) {
	if($page == $row['id']) {
		echo "<li class='selected'><a href='main.php?page=". $row['id'] ."'>". $row['icon'] ."</a></li>";
	} else {
		echo "<li><a href='main.php?page=". $row['id'] ."'>". $row['icon'] ."</a></li>";
	}
}

echo "</ul>";

/*
  <ul>
  	<li><a href="#"><i class="fas fa-th"></i></a></li>
  	<li><a href="#"><i class="far fa-list-alt"></i></a></li>
	<li class="selected"><a href="#"><i class="far fa-user"></i></a></li>
	<li><a href="#"><i class="far fa-chart-bar"></i></a></li>
	<li><a href="#"><i class="far fa-comments"></i></a></li>
	<li><a href="#"><i class="far fa-clock"></i></a></li>
	<li><a href="#"><i class="far fa-address-book"></i></a></li>
	<li><a href="#"><i class="far fa-calendar-alt"></i></a></li>
	<li><a href="#"><i class="far fa-clipboard"></i></a></li>
	<li><a href="#"><i class="far fa-bell"></i></a></li>
	<li><a href="#"><i class="far fa-compass"></i></a></li>
	</ul>
*/