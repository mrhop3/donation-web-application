<?php 
include "config.php";
$sql = "SELECT * FROM `donateclothes` ";
$result = $conn->query($sql);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>DashBoard</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://use.typekit.net/zdk2sfw.css">
    <link rel="icon" href="http://localhost/forhope/img/iconz.ico">
</head>
<body>
    <div class="mid">
        
        <h1 class="heroword">
                Clothes
        </h1>
        
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th>Name</th>
                <th>Food Type</th>
                <th>Contact</th>
                <th>Address</th>
            </tr>
            </thead>
	    <tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['Name']; ?></td>
					<td><?php echo $row['Clothes_Type']; ?></td>
					<td><?php echo $row['Contact']; ?></td>
					<td><?php echo $row['Address']; ?></td>
                    <td><a class="btn btn-danger" href="delete01.php?Name=<?php echo $row['Name']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        		
	</tbody>
</table>

</div>
<a onclick="history.back();">G O <span>B A C K</span></a>

        
    </div>
</body>
</html>
<!-- Pruthvi Rao	Non-Veg	9367897632	23/5,Raja Nagar, Perumal kovil opt, Madurai 625001 -->