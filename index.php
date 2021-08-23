<!DOCTYPE HTML>
<html>
<head>
	<title>Read Records</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		
	
	<style>
	.m-r-1em{ margin-right:1em; }
	.m-b-1em{ margin-bottom:1em; }
	.m-l-1em{ margin-left:1em; }
	.mt0{ margin-top:0; }
	</style>

</head>
<body>

    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Buy Products</h1>
        </div>
	
        <?php
// include database connection
include 'config/database.php';

$action = isset($_GET['action']) ? $_GET['action'] : "";
 

if($action=='deleted'){
    echo "<div class='alert alert-success'>Product was deleted.</div>";
}

// select all data
$query = "SELECT isdone, id, name, description, price FROM products ORDER BY id DESC";
$stmt = $con->prepare($query);
$stmt->execute();

// this is how to get number of rows returned
$num = $stmt->rowCount();

// link to create record form
echo "<a href='create.php' class='btn btn-primary m-b-1em'>Add to cart</a>";

//check if more than 0 record found
if($num>0){

	echo "<table class='table table-hover table-responsive table-bordered'>";//start table

	//table heading
    echo "<tr>";
        echo "<th>Bought</th>";
        echo "<th>ID</th>";
		echo "<th>Game Name</th>";
		echo "<th>Description</th>";
		echo "<th>Price</th>";
		echo "<th>Action</th>";
	echo "</tr>";
	

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

	extract($row);
	
	// creating new table row per record
    echo "<tr>";
        echo "<td>".(($isdone==0) ? 'No':'Yes')."</td>";
		echo "<td>{$id}</td>";
		echo "<td>{$name}</td>";
		echo "<td>{$description}</td>";
		echo "<td>{$price} SEK</td>";
		echo "<td>";
			// read one record 
			echo "<a href='read_one.php?id={$id}' class='btn btn-info m-r-1em'>Read</a>";
			
			// we will use this links on next part of this post
			echo "<a href='update.php?id={$id}' class='btn btn-primary m-r-1em'>Update</a>";

			// we will use this links on next part of this post
			echo "<a href='#' onclick='delete_user({$id});'  class='btn btn-danger'>Delete</a>";
		echo "</td>";
	echo "</tr>";
}


echo "</table>";
	
}

// if no records found
else{
	echo "<div class='alert alert-danger'>No products found.</div>";
}
?>
		
    </div> <!-- end .container -->
	
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type='text/javascript'>



function delete_user( id ){
     
    var answer = confirm('This action cannot be undone, Are you sure?');
    if (answer){
        // if user clicked ok, 
        // pass the id to delete.php and execute the delete query
        window.location = 'delete.php?id=' + id;
    } 
}
</script>

</body>
</html>