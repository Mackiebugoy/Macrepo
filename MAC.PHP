<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <table style="width: 100%; height: 100%">
    <colgroup>
      <col
    </colgroup>
    	<thead>
    		<tr>
    			<th>No</th>
    			<th>Username</th>
    			<th>Password</th>
    			<th>User type</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php

    		  include('we d.php');
              $sql = "SELECT * from userates";
              $result = $conn -> query($sql);
              $x =0;
              while($row = $result ->fetch_assoc()){
                $x++;
        ?>

            <tr>
                <td><?php echo $x ;?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['userpass'];?></td>
                <td><?php echo $row['usertype'];?></td>
            </tr>    
         <?php   
              }
         ?>
    	</tbody>
    </table>
