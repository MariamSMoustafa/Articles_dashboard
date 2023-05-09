<div style="display:flex;text-align: center; width:100%">
</div>
# Introduction
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



## Authors

- [Sara Hossam](https://github.com/Sarahussam77)

- [Mariam Saad](https://github.com/MariamSMoustafa)

- [Ahmed abdelrhem](https://github.com/ahmedabdelrahim123)

- [Esraa Elsayed](https://github.com/Esraamohamed0)

- [Mariam Reda Elbakry](https://github.com/MariamBakry)