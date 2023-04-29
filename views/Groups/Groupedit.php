<?php 
 
$handler = new MySQLHandler("groups");

 $id=intval($_GET['group']);
 $res=$handler->get_record_by_id($id);
 if(isset($_POST['submit'])){
  move_uploaded_file($_FILES['icon']['tmp_name'], "./assets/images/". $_FILES['icon']['name']);
  $newdata=array("name"=>$_POST['name'] , "icon"=>"./assets/images/".$_FILES["icon"]['name'] ,"description"=>$_POST['desc']);
  $handler->connect();
  $handler->update($newdata,$id);
  header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
 }


 
                   ?>
           
<div class="container p-5">

<h4 style="color:#584e46">Edit Group Detail</h4>

<form id="update-Items" enctype='multipart/form-data' action="" method="POST">
	<div class="form-group">
      <input type="text" class="form-control" id="product_id"  hidden>
    </div>
    <div class="form-group">
      <label for="name">Group Name:</label>
      <input name="name" type="text" class="form-control" id="g_name" value="<?=$res[0]['name']?>">
    </div>
    <div class="form-group">
      <label for="desc">Group Description:</label>
      <input name="desc" type="text" class="form-control" id="g_desc" value="<?=$res[0]['description']?>">
    </div>
    <div class="form-group">
      <label for="icon">Group Icon:</label>
      <input type="file" name="icon" class="form-control" id="exampleFormControlTextarea1" >
      <image name="icon" class="mt-2" src="<?=$res[0]['icon']?>" style="width: 50px;">
    </div>
   
    <button name="submit" type="submit" class="btn btn-primary">Update</button>
  </form>

    </div>

