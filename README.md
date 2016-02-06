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

![signup_page](https://cloud.githubusercontent.com/assets/8812357/12862608/db01b39a-cc21-11e5-91c9-ac4daa07d7d3.png)
![loginpage](https://cloud.githubusercontent.com/assets/8812357/12862603/daefdff8-cc21-11e5-8389-f6982259141b.png)
![main_interface](![main_interface](https://cloud.githubusercontent.com/assets/8812357/12862673/737b3056-cc22-11e5-8b15-3be98cfb75cc.jpg)
![login_chat](https://cloud.githubusercontent.com/assets/8812357/12862601/daef8814-cc21-11e5-9154-11318d078dfe.png)
![onlineusers_and chatrooms](https://cloud.githubusercontent.com/assets/8812357/12862602/daef9976-cc21-11e5-836c-cb0903e2db86.png)
![call_ongoing](https://cloud.githubusercontent.com/assets/8812357/12862598/daec1ca6-cc21-11e5-8fc4-50fb3bd47c57.png)
![secured_chat](https://cloud.githubusercontent.com/assets/8812357/12862607/db013afa-cc21-11e5-9ba3-ca1ece19bd58.png)
![editdata_page](https://cloud.githubusercontent.com/assets/8812357/12862599/daed698a-cc21-11e5-93b5-3586e21faebc.png)
![password_reset](https://cloud.githubusercontent.com/assets/8812357/12862605/dafb3556-cc21-11e5-91bf-3cede0b69435.png)
![rename](https://cloud.githubusercontent.com/assets/8812357/12862606/daff2c10-cc21-11e5-97ef-1dfd65e93a3c.png)

