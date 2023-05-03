
    <?php
	    $handler = new MySQLHandler("groups");
	  $searchErr = '';
	  $search_details='';
    $displayErr = 'none';
	  if(isset($_POST['save']))
	  {
	      if(!empty($_POST['search']))
	      {
	        $search = $_POST['search'];
	        $search_details = $handler->search_fun("id","name","$search");
	        if(empty($search_details)){
            $displayErr = 'block';
	          $searchErr = "There is no data like the one you entered!";
	          $search_details = show_groups();
	        }
	      }
	      else
	      {
          $displayErr = 'block';
          $search_details = show_groups();
          $searchErr = "Please enter what you want to search for!";
        }   
	  }
	  else{
	    $search_details = show_groups();
	  }
	?>
    <!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		</head>
		<body>
		<center>
		<div class="container px-5" style="align:center;width:60%;">
        <form class="form-horizontal"  action="#" method="post">
            <div class="input-group mb-3">
                <input name="search" type="text" placeholder="search here" class="form-control"
                    aria-describedby="button-addon2">
                <button type="submit" name="save" style="color:white; font-weight:bold; Background-color:#584e46"
                    class="btn mx-2 btn-outline-secondary" id="button-addon2">Search</button>
            </div>
            <div class="form-group">
                <div class="alert alert-danger error" role="alert" style="display: <?php echo $displayErr;?>;">
                    <?php echo $searchErr;?>
                </div>
            </div>
        </form>
<div class="mb-2" style="overflow-y:auto;height:380px" >
        <table border="1px" class="px-5 " >
         <thead>
		 <tr>
                <th colspan=6>
                    <h2>Groups Record</h2>
                </th>
            </tr>
            <tr>
                <?php if($search_details)
	        {
	            foreach($search_details[0] as $key=>$val) {
	            echo "<th>".$key."</th>";
	            }
	            echo "<th>Action</th></thead></tr>";
	            foreach($search_details as $row) {
	?>

            <tr></
		 </thead>
               <tbody>
			   <td><?php echo $row['id'] ?> </td>
                <td><a style='color:#584e46; font-weight:bold'
                        href=<?php echo $_SERVER['PHP_SELF']?>?user=filter&id=<?php echo $row['id']?>>
                        <?php echo $row['name'] ?> </a></td>
                <td>
                    <image class='mt-2 w-25' src=<?php echo $row['icon']?>>
                </td>
                <td> <?php echo $row['description'] ?></td>
                <td>
                    <a style='color:#584e46; font-weight:bold'
                        href=<?php echo $_SERVER["PHP_SELF"]?>?group=<?php echo $row["id"] ?>> Edit </a><br>
                    <a style='color:#584e46; font-weight:bold'
                        href=<?php echo $_SERVER["PHP_SELF"] ?>?group=delete&id=<?php echo $row["id"]?> name='delete'
                        type='submit'> Delete </a>
                </td>
            </tr>
            <?php } ?>
			   </tbody>
        </table></div>
        <?php }?>
        <a style='color:white; font-weight:bold; Background-color:#584e46'
            href='<?php echo $_SERVER["PHP_SELF"]?>?group=add' name='add' type='button' class='btn btn-secondary'>Add
            Group</a>

    </div>
    <br><br>

</center>
		</body>
	</html>