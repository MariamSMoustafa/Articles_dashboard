<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		</head>
		<body>
<div class="container p-5">
<h4 style="color:#3B3131">Edit User Detail</h4>
<?php $res=edit_user() ?>
  <form id="update-Items" enctype='multipart/form-data' action="<?php echo update_user()?>" method="POST">
      <div class="form-group">
          <input type="text" class="form-control" id="product_id"  hidden>
      </div>
      <div class="form-group">
          <label for="name">User Name:</label>
          <input name="name" type="text" class="form-control" id="u_name" value="<?=$res[0]['name']?>" required> 
      </div>
      <div class="form-group">
          <label for="desc">User Number:</label>
          <input name="number" type="text" class="form-control" id="u_num" value="<?=$res[0]['number']?>" required>
      </div>
      <div class="form-group">
          <label for="icone">Group :</label>
          <input name="group_id" type="number" class="form-control" id="g_id" value="<?=$res[0]['group_id']?>" required>
      </div>
      <button style="background-color:#3B3131; color:white; border:none" name="update" type="submit" class="btn btn-primary">Update</button>
  </form>

    </div>

</body>
</html>
    