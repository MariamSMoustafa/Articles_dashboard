<?php 
require_once("../../vendor/autoload.php");
$handler = new MySQLHandler("groups");
include "../../adminHeader.php";
 include "../../sidebar.php";
 $id=intval($_GET['groupId']);
 $res=$handler->get_record_by_id($id);

 
                   ?>
            <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="../../assets/css/style.css"/>
<div class="container p-5">

<h4>Edit Group Detail</h4>

<form id="update-Items" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="product_id"  hidden>
    </div>
    <div class="form-group">
      <label for="name">Group Name:</label>
      <input type="text" class="form-control" id="g_name" value="<?=$res[0]['name']?>">
    </div>
    <div class="form-group">
      <label for="desc">Group Description:</label>
      <input type="text" class="form-control" id="g_desc" value="<?=$res[0]['description']?>">
    </div>
    <div class="form-group">
      <label for="icone">Group Icon:</label>
      <input type="text" class="form-control" id="g_icon" value="<?=$res[0]['icon']?>">
    </div>
   
    
  </form>

    </div>
    <script type="text/javascript" src="../../assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>