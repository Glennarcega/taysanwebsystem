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
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Add Room</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" enctype = "multipart/form-data">
					<div class = "form-group">
							<label>Hotel Name </label>
							<input type="text" class="form-control" name = "hotel_name" rows="2">
						</div>
						<div class = "form-group">
							<label>Room Type </label>
							<input type="text"  class="form-control" name = "room_type" rows="2">
						</div>
						<div class="form-group">
							<label>Room Number</label>
							<input type="text" class="form-control" name="room_number" />
						</div>

						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" class = "form-control" name = "price" />
						</div>
						<div class = "form-group">
							<label>Description </label>
							<textarea class="form-control" name = "descr" rows="3"></textarea>
						</div>
						<div class = "form-group">
							<label>Location </label>
							<textarea class="form-control" name = "location" rows="2"></textarea>
						</div>
						<div class = "form-group">
							<label>Transportation </label>
							<textarea class="form-control" name = "transportation" rows="2"></textarea>
						</div>
						<div class = "form-group">
							<label>Photo </label>
							
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br />
						<br />
						<div class = "form-group">
							<button name = "add_room" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once '../admin_query/add_query_room.php'?>
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