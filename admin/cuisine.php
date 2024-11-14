<!DOCTYPE html>
<?php
	require_once '../admin_query/validate.php';
	require '../admin_query/name.php';
?>
<html lang = "en">
	<head>
    <title>Tinindag Festivals</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
       
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
            <a class = "navbar-brand" >Taysan: Where Potential Blossoms, and Tourism Thrives</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i> <?php echo $name;?></a>
				</li>
				<li><a href = "index.php">Logout</a></li>	
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
		<li><a href = "home.php">Home</a></li>
			<li class = ""><a href = "registered_user.php">Registered Accounts</a></li>
			<li><a href = "account.php">Accounts</a></li>
            <li ><a href = "reserve.php">Hotel Booking</a></li>
			<li><a href = "reserve_resort.php">Resort Booking</a></li>
            <li class = "active"><a href = "room.php">Booking</a></li>				
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Cuisine</div>
                
        <a href="resort.php" style="text-decoration: none;">
		<div style="padding: 20px; text-align: center;">
        <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
            onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <img src="image/resort.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                onmouseover="this.style.transform='scale(1.1)';" 
                onmouseout="this.style.transform='scale(1)';">
            <div style="padding: 15px; text-align: center;">
                <h3 style="font-size: 2.2rem; margin-bottom: 10px; font-weight: bold; color: black;">RESORT</h3>
                <p style="font-size: 1.5rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                <button onclick="window.location.href='resort.php'" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
                        onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                    <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px;">
                </button>
                <div style="display: flex; justify-content: center; gap: 5px;">
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                </div>
            </div>
        </div>
        </a>

        <a href="room.php" style="text-decoration: none;">
        <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
            onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <img src="image/hotel.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                onmouseover="this.style.transform='scale(1.1)';" 
                onmouseout="this.style.transform='scale(1)';">
            <div style="padding: 15px; text-align: center;">
                <h3 style="font-size: 2.2rem; margin-bottom: 10px; font-weight: bold; color: black;">HOTEL</h3>
                <p style="font-size: 1.5rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                <button onclick="window.location.href='room.php'" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
                        onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                    <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px;">
                </button>
                <div style="display: flex; justify-content: center; gap: 5px;">
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                </div>
            </div>
        </div>
        </a>

        <a href="attraction.php" style="text-decoration: none;">
        <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
            onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <img src="image/attraction.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                onmouseover="this.style.transform='scale(1.1)';" 
                onmouseout="this.style.transform='scale(1)';">
            <div style="padding: 15px; text-align: center;">
                <h3 style="font-size: 2.2rem; margin-bottom: 10px; font-weight: bold; color: black;">ATTRACTION</h3>
                <p style="font-size: 1.5rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                <button onclick="window.location.href='attraction.php'" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
                        onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                    <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px;">
                </button>
                <div style="display: flex; justify-content: center; gap: 5px;">
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                </div>
            </div>
        </div>
        </a>
        <a href="cuisine.php" style="text-decoration: none;">
           <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                <img src="image/cuisine.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                    onmouseover="this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.transform='scale(1)';">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 2.2rem; margin-bottom: 10px; font-weight: bold; color: black;">CUISINE</h3>
                    <p style="font-size: 1.5rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                    <button onclick="window.location.href='cuisine.php'" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
                            onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                        <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px;">
                    </button>
                    <div style="display: flex; justify-content: center; gap: 5px;">
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    </div>
                </div>
                </div>
                </a>
</div>
				<a class = "btn btn-success" href = "add_cuisine.php"><i class = "glyphicon glyphicon-plus"></i> Add Cuisine</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
						    <th>Cuisine Name</th>
							<!--<th>Location</th> -->
							<th>Description</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `cuisine`") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
					    	<td><?php echo $fetch['cuisine_name']?></td>
							<td><?php echo $fetch['descr']?></td>
							<td><center><img src = "../photo/<?php echo $fetch['photo']?>" height = "50" width = "50"/></center></td>
							<td><center><a class = "btn btn-warning" href = "edit_cuisine.php?cuisine_id=<?php echo $fetch['cuisine_id']?>"></i> Edit</a> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "../admin_query/delete_cuisine.php?cuisine_id=<?php echo $fetch['cuisine_id']?>"> Delete</a></center></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	


</body>

<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
<script src = "../js/jquery.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>