<?php

if($page == '1') {
echo "<div class='container-status'>
	
	<div class='container-status-item'>
		<p class='large'>12</p>
		<p class='status-text'>Your assigned tickets</p>
	</div>
	
	<div class='container-status-item'>
		<p class='large'>33</p>
		<p class='status-text'>New tickets for today</p>
	</div>
	
	<div class='container-status-item'>
		<p class='large'>137</p>
		<p class='status-text'>Open tickets</p>
	</div>
	
	<div class='container-status-item'>
		<p class='large'>4</p>
		<p class='status-text'>Highpriority tickets</p>
	</div>
	
	<div class='container-status-item'>
		<p class='large'>333</p>
		<p class='status-text'>Closed tickets</p>
	</div>
	
	<div class='container-status-item'>
		<p class='large'>6447</p>
		<p class='status-text'>Total tickets</p>
	</div>

</div>";
	
} elseif($page == '2') {
	echo "<h2>Assigned tickets</h2>
  
  <table class='mytickets'>
  	<tr>
  		<th width='20px'><input type='checkbox'></th>
  		<th width='50px'>Ticket</th>
  		<th>Requester</th>
  		<th>Summary</th>
  		<th>Priority</th>
  		<th>Status</th>
  	</tr>
  	<tr>
  		<td><input type='checkbox'></td>
  		<td>233</td>
  		<td>Anders Andersson</td>
  		<td>Cannot use the printer</td>
  		<td>Normal</td>
  		<td>Open</td>
  	</tr>
  	<tr>
  		<td><input type='checkbox'></td>
  		<td>233</td>
  		<td>Anders Andersson</td>
  		<td>Cannot use the printer</td>
  		<td>Normal</td>
  		<td>Open</td>
  	</tr>
  	<tr>
  		<td><input type='checkbox'></td>
  		<td>233</td>
  		<td>Anders Andersson</td>
  		<td>Cannot use the printer</td>
  		<td>Normal</td>
  		<td>Open</td>
  	</tr>
  	<tr>
  		<td><input type='checkbox'></td>
  		<td>233</td>
  		<td>Anders Andersson</td>
  		<td>Cannot use the printer</td>
  		<td>Normal</td>
  		<td>Open</td>
  	</tr>
  </table>";

} else {
	echo "simple text";
}