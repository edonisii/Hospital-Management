<?php
	require 'config.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
            <th>Id</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Username</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $con->prepare("SELECT * FROM `users` WHERE `fullname` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
            <td><?php echo $row['id']?></td>
				<td><?php echo $row['fullname']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['username']?></td>
                
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<thead class="alert-info">
		  <tr>
            <th>Id</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Username</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $con->prepare("SELECT * FROM `users`");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
                <td><?php echo $row['id']?></td>
				<td><?php echo $row['fullname']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['username']?></td>
         
            

			</tr>
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php
	}
?>