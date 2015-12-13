<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Video WebRTC</title>
     <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        /* just for the demo */
        body {
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size: 20px;
	background-image: url(img/sun_android_google_moutain_google_now_1920x1080_wallpaper_Wallpaper%20HD_2560x1600_www.paperhi.com.jpg);
	color: #000000;
	padding-left: 250px;
	padding-top: 251px;
	background-repeat: repeat;
	background-size: cover;
        }
        label {
	position: relative;
	vertical-align: middle;
	text-align: center;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size: 20px;
        }
        input[type=text],
        input[type=password],
		input[type=submit],
        input[type=email] {
	display: block;
	margin-bottom: 15px;
	width: 400px;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size: 20px;
        }
        input[type=checkbox] {
	margin-bottom: 20px;
	font-size: 22px;
        }
		input[type=submit]{
	background-color: #00FF6C;
	font-weight: bolder;
	}
	p{
	color: #0015FF;
	font-size: 30px;
}
a{
	color: #001786;
	font-size: 24px;
	text-align: center;
	padding-left: 90px;
}

    </style>
   
</head>
<body>
<font color="#33078F">
<p><strong> Welcome to VideoWebRTC</strong></p></font>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
