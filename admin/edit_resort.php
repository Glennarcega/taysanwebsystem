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
				<div class = "alert alert-info">Edit Resort Details</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `resort` WHERE `resort_id` = '$_REQUEST[resort_id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
				
					<form method = "POST" enctype = "multipart/form-data">
						<div class="form-group">
								<label>Resort Name</label>
								<input type="text" class="form-control" value = "<?php echo $fetch['resort_name']?>"  name = "resort_name" required/>
							</div>	
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['price']?>" class = "form-control" name = "price" />
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="descr" rows="3"><?php echo htmlspecialchars($fetch['descr']); ?></textarea>
						</div>
						<div class="form-group">
							<label>Location</label>
							<textarea class="form-control" name="location" rows="2"><?php echo htmlspecialchars($fetch['location']); ?></textarea>
						</div>
						<div class="form-group">
							<label>Transportation</label>
							<textarea class="form-control" name="transportation" rows="2"><?php echo htmlspecialchars($fetch['transportation']); ?></textarea>
						</div>
						<div class = "form-group">
							<label>Photo </label>
							
							<input type = "file" required = "required" id = "photo" name = "photo"  required/>
						</div>


						<br />
						<div class = "form-group">
							<button name = "edit_resort" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once '../admin_query/edit_query_resort.php'?>
				</div>
			</div>
		</div>
	</div>
</body>
<script type = "text/javascript">
	$(document).ready(function(){
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>