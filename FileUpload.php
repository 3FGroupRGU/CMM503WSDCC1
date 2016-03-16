<?php
session_start();
$_SESSION=array();
if (ini_get("session.use_cookies")){
	$params=session_get_cookie_params();
	setcookie(session_name(), '',time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);
}
session_destroy()
?>
<?php
if(isset($_FILES['UploadFileField'])) {
	// Create the Variables needed to upload the file
	$UploadName = $_FILES ['UploadFileField']['name'];
	$UploadName = mt_rand (100000, 999999) .$UploadName;
	$UploadTmp = $_FILES ['UploadFileField']['tmp_name'];

	$UploadType = $_FILES ['UploadFileField']['type'];
	$FileSize = $_FILES ['UploadFileField']['size'];

	// Remove Unwanted Spaces and characters from the files name of the files being uploaded.
	$UploadName = preg_replace ("#[^a-z0-9.]#i", "", $UploadName);
	// Upload File Size Limit
	if(($FileSize > 125000)) {
		die("Error - File too Big");

	}
	// Checks a file has been Selected and Uploads then into a Directory on your Server
	if(!UploadTmp) {
		die("No File Selected, Please Upload Again");
	}else{
		move_uploaded_file($UploadTmp, "Upload/$UploadName");
	}
}
?>
<!doctype html>
<!--design has been followed from Simpletut.com via https://www.youtube.com/watch?v=Qqcj4nYkcks'-->
<html>
<head>
	<meta charset="utf-8">
	<title>Ginger Bugginess</title>
	<link rel="stylesheet" href="layout.css" type="text/css" />
	<link rel="stylesheet" href="menu.css" type="text/css" />
</head>

<body>
<div id="holder"></div>
<div id="header">
	<h1>Ginger Bugginess Fault Tracker</h1>
</div>
<div id="NavBar">
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php">Log Out</a></li>
		</ul>
	</nav>
</div>
<div id="content">
	<div id="pageheading">
		<h1>Welcome</h1>
	</div>
	<div id="contentleft">
		<h2>Welcome to the Ginger Bugginess fault logging page.</h2><br>
		<h3>File Upload Page.</h3><br>
		<p>Please upload your file(s)for examination via the provided upload link.</p>
	</div>
	<div id="contentright">
		<div class="fileuploadholder">
			<form action="FileUpload.php" method="POST" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
				<label for="UploadFileField"></label>
				<input type="file" name="UploadFileField" id="UploadFileField" />
				<input type="submit" name="UploadButton" id="UploadButton" value="Upload"/>
			</form>
		</div>
		<div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
	</div>
</div>
<div id="footer"></div>
</body>
</html>

