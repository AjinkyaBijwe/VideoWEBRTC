WebRTC Simple Video Calling using Open Source PUBNUB SDK
===========================================================

Copy all files onto the server and edit config.php file in config folder with the mysql username and password

create database named videowe3_ajinkya and execute .sql file

In config.php replace the URL in the file 

Need SSL to execute the project

Steps to Install the Project
========================

1)	Download and Install with administrator permissions XAMPP server from the link for Windows Linux or OSX https://www.apachefriends.org/index.html

2)	Copy the content of the project to xampp/htdocs

3)	Run XAMPP server by right click and run as Administrator

4)	Start Apache, MySQL and Mercury server

5)	Run PhpMyAdmin from http://localhost/phpmyadmin/

6)	Create Database “videowe3_ajinkya”

7)	Run videowe3_ajinkya.sql file in videowe3_ajinkya database provided in the Config folder of project mainv10/config

8)	Open Config.php file in the config folder of project edit
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "videowe3_ajinkya");
define("DB_USER", "root");
define("DB_PASS", "");

9)	Open Chrome browser and write “https://localhost/mainv10” in URL
Login can be done with “Username: Ajinkya Password: 123456” for testing
Note: Chrome may not allow site to open “Your connection is not private” so select advance> proceed to localhost(unsafe) 

10)	When asked for Microphone and Webcam permission select “ALLOW”, you will be able to see the webcam is on and your feed onto homepage

11)	Login into chat on the menu bar with suitable name to see who is online

12)	Share the generated number top other user or just open Incognito tab of  and copy paste generated URL and call the number the call should be connected

13)	Open “Secure Chat” from the Menu Bar and Login using suitable username

![login](https://www.dropbox.com/s/uqusnbstbwd9ovz/LoginPage.png?dl=0)
