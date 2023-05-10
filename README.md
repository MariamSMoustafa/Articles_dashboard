# ARTICLES SYSTEM
<p align="center" style="margin-top:6%;margin-bottom:6%;">
  <img  src="https://media.giphy.com/media/wgFzLCCoo4ofVYaxvL/giphy.gif" />
</p>


## Introduction
Our website built using PHP that uses role-based access control to provide different levels of access . The site has three main roles:admins ,editors and users, each with different permissions for CRUD on Articles,groups and users. The site is designed to be secure,efficient,flexible and scalable.
## Installation & Project Run
<pre>
git clone https://github.com/MariamSMoustafa/Articles_dashboard.git
</pre>

### Database creation
- create database
- import php-project.sql from DB file
- create config.php called dbconnect.php in a folder called config


```
<?php
<?php

define("__HOST__","your_host");
define("__USER__","your_user");
define("__PASS__","your_password");
define("__DB__","your_database");
define("__RECORDS_PER_PAGE__",the number of records to retrieve);
define("__DebugMode__",0);

?>

```

<pre>
composer install
</pre>

<pre>
composer dump-autoload
</pre>



## Features


- Role-based access control.
- Article creation, reading and deletion.
- CRUD operation on Users and Groups.
- Search and filtering and all tables.
- Responsive design .
- Chart statistics and analysis.
- Error and exception logging

## Technologies
- PHP
- MySQL
- JS
- Bootstrap
- CSS3
- HTML5



## Roles 

 Admin ----> Full access <br>
 Editor ---> Full access on articles - View Groups and users but has no access on cruds <br>
 User ---->View Groups and users but has no access on cruds
## ScreenShoots Samples
![image](https://github.com/MariamSMoustafa/Articles_dashboard/blob/dev/assets/images/0.png)

![image](https://github.com/MariamSMoustafa/Articles_dashboard/blob/dev/assets/images/1.png)

![image](https://github.com/MariamSMoustafa/Articles_dashboard/blob/dev/assets/images/4.png)



![image](https://github.com/MariamSMoustafa/Articles_dashboard/blob/dev/assets/images/3.png)



## Video Demo 

### [![Website Demo Video](https://github.com/MariamSMoustafa/Articles_dashboard/blob/dev/assets/images/1.png)](https://drive.google.com/file/d/1FFfAWn6u1UVQkCvir2j9TA2oPTQCTrh0/view?usp=sharing)

## Authors

- [Sara Hossam](https://github.com/Sarahussam77)

- [Mariam Saad](https://github.com/MariamSMoustafa)

- [Ahmed Abdelrhim](https://github.com/ahmedabdelrahim123)

- [Esraa Elsayed](https://github.com/Esraamohamed0)

- [Mariam Reda Elbakry](https://github.com/MariamBakry)
