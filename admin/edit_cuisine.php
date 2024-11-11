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
				<div class = "alert alert-info">Edit Cuisine Details</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `cuisine` WHERE `cuisine_id` = '$_REQUEST[cuisine_id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
				
					<form method = "POST" enctype = "multipart/form-data">
						<div class="form-group">
								<label>Cuisine Name</label>
								<input type="text" class="form-control" value = "<?php echo $fetch['cuisine_name']?>"  name = "cuisine_name" required/>
							</div>	
							<div class="form-group">
								<label>Description</label>
								<input type="text" class="form-control" value = "<?php echo $fetch['descr']?>"  name = "descr" required/>
							</div>
						<!--<div class="form-group">
							<label>Location</label>
							<input type="text" class="form-control" value = "<?php echo $fetch['location']?>"  name = "location" />
						</div> -->

						<div class = "form-group">
							<label>Photo </label>
							
							<input type = "file" required = "required" id = "photo" name = "photo"  required/>
						</div>


						<br />
						<div class = "form-group">
							<button name = "edit_cuisine" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once '../admin_query/edit_query_cuisine.php'?>
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