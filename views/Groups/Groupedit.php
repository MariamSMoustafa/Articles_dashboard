
           
<div class="container p-5">

<h4 style="color:#584e46">Edit Group Detail</h4>

<?php $res=edit_group() ?>
<form id="update-Items" enctype='multipart/form-data' action="<?php echo update_group()?>" method="POST">
	<div class="form-group">
      <input type="text" class="form-control" id="product_id"  hidden>
    </div>
    <div class="form-group">
      <label for="name">Group Name:</label>
      <input name="name" type="text" class="form-control" id="g_name" value="<?=$res[0]['name']?>" alt="no image">
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
   

    <button style="background-color:#584e46; color:white; border:none"  name="submit" type="submit" class="btn btn-primary">Update</button>

  </form>

    </div>

               


    