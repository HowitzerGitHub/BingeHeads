# BingeHeads
Movie Website

Access this full website on - http://bingeheads.epizy.com/  (please wait on the login/signup page for a few second to load the background)
(This is due to the low bandwidth of the free hosting)

NOTE : Website is not made Responsive yet (will be done in Future) so mobile/tablet devices may not be able to view it properly

Steps To Run this Project on Local Host (Personal Laptop/Computer as a Webserver)

0 - Clone this Repo or Download the Zip

1 - Install XAMPP(XAMPP for Apache mariaDB PHP Pearl) server from - https://www.apachefriends.org/download.html (Choose your OS in which you want to        install Server)

2 - After the installation is complete move to parent directory where you installed XAMPP

3 - Go to XAMPP installation Folder

4 - Find a folder named 'htdocs' inside the installation directory

5 - Open the folder and place your website folder(fasal-website) inside it

6 - Now go to the XAMPP Control Panel application

7 - You will see Apache and MySQL in Module Section, Under Action section Start these both(leave rest all). After successfull start of the server and database respective ports and process IDs will be visible

8 - Open MySQL Admin panel from there (right to the Actions section)

10 - A browser window will open You will be able to see various database on the left hand side under the heading phpMyAdmin

11 - Click on new

12 - In create database section type the name 'moviesbinge' (without single quotes) (you can use your own database name but for that change the database name in 'db_conn.php' file too)

13 - After the databse has been created you will be redirected to create tables window 

14 - As I have already designed the schema for the database and exported it as a SQL file no need to create tables here 

15 - Click on import in the navigation bar on top of the screen

16 - In the 'File to Import' section click on choose file and choose 'moviesbinge.sql' from create DB folder of the project 

17 - Scroll down to the last and click on import

18 - Your database should be populated with tables now


 RUN the website

 19 - Go to your browser and type ' localhost/fasal-website ' and press enter
 
 20 - Voila your movie website is UP and Running
