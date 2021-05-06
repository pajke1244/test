<?php 
require_once "../functions.php";
if (isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN'] != '') {

}else{
	redirect("../login.php");
	die();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin panel</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/sb-admin.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
	 <?php include "nav.php"; ?>
			<!-- /.navbar-collapse -->
		</nav>
		<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							All comments                            
						</h1>
						<form action="" method="post">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>										
										<th>Id</th>
										<th>Author</th>
										<th>Comment</th>								
										<th>Email</th>																
										<th>Status</th>
										<th>Approve</th>
										<th>Unapprove</th>
										<th>Delete</th>								
									</tr>
								</thead>
								<tbody>
									<?php 
									$query="SELECT * from comments";
									$select_comments=mysqli_query($connection,$query);
									while ($row=mysqli_fetch_assoc($select_comments)) {
										$com_id=$row['com_id'];										
										$com_name=$row['com_name'];
										$com_msg=$row['com_msg'];
										$com_email=$row['com_email'];
										$com_status=$row['com_status'];
										echo "<tr>";
										?>
										<?php
										echo "<td>{$com_id}</td>";
										echo "<td>{$com_name}</td>";
										echo "<td>{$com_msg}</td>";
										echo "<td>{$com_email}</td>";								
										echo "<td>{$com_status}</td>";										
										echo "<td><a href='view_all_comments.php?approve={$com_id}'>Approve</a></td>";
										echo "<td><a href='view_all_comments.php?unapprove={$com_id}'>Unapproved</a></td>";
										echo "<td><a href='view_all_comments.php?delete={$com_id}'>Delete</a></td>";				
										echo "</tr>";

									}					
									?>						
								</tbody>
							</table>


						</div>
					</div>
					<!-- /.row -->

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

	</body>

	</html>

	<?php 

	//unpprove funkcija
	if (isset($_GET['unapprove'])) {
		$the_unapprove_comment=$_GET['unapprove'];
		$query=" UPDATE  comments set com_status = 'unapproved' where com_id=$the_unapprove_comment ";
		$comment_unpprove=mysqli_query($connection,$query);
		header("Location: view_all_comments.php");

	}

//approve funkcija

	if (isset($_GET['approve'])) {
		$the_approve_comment=$_GET['approve'];
		$query=" UPDATE  comments set com_status = 'approved' where com_id=$the_approve_comment ";
		$comment_approve=mysqli_query($connection,$query);
		header("Location: view_all_comments.php");

	}

//delete funkcija
	if (isset($_GET['delete'])) {
		$the_delete_comment=$_GET['delete'];
		$query=" delete from comments where com_id=$the_delete_comment ";
		$comment_approve=mysqli_query($connection,$query);
		header("Location: view_all_comments.php");

	}



	?>
