
<?php
$handler = new MySQLHandler("users");
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
            $search_details =show_users();
        }
    }
    else
    {
        $displayErr = 'block';
        $search_details =show_users();
        $searchErr = "Please enter what you want to search for!";
    }
  
}
else{
    $search_details =show_users();
}
?>
<center>
<div class="container px-5" style="align:center;width:60%;">
	<form class="form-horizontal" action="#" method="post">
        <div class="input-group mb-3">
            <input name="search" type="text" placeholder="search here" class="form-control" aria-describedby="button-addon2">
            <button type="submit" name="save" style="color:white; font-weight:bold; Background-color:#584e46" class="btn btn-outline-secondary mx-2" id="button-addon2">Search</button>
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
                    <h2>Users Record</h2>
                </th>
            </tr>
            <tr>
        <th>id</th>
        <th>name</th>
       <th>email</th>
        <th>number</th>
        <th>group </th>
        
        
<?php
        if($_SESSION['group']=='Admins') {
            echo "<th>Action</th></thead></tr>";
        }
    
        if($search_details) {
            foreach($search_details as $row) {?>
            </tr>
		 </thead>
         <tbody>
                <tr>
                <td><?php echo $row['id'] ?> </td>
                <td><a style='color:#584e46; font-weight:bold'
                        href=<?php echo $_SERVER['PHP_SELF']?>?article=filter&id=<?php echo $row['id']?>>
                        <?php echo $row['name'] ?> </a></td>
                        <td> <?php echo $row['email'] ?></td>
                        <td> <?php echo $row['number'] ?></td>
                        <td> <?php echo groupname($row['group_id'])  ?></td>
<?php
                if($_SESSION['group']=='Admins') { ?>
                     <td>
                    <a style='color:#584e46; font-weight:bold'
                        href=<?php echo $_SERVER["PHP_SELF"]?>?user=<?php echo $row["id"] ?>> Edit </a><br>
                    <a style='color:#584e46; font-weight:bold'
                        href=<?php echo $_SERVER["PHP_SELF"] ?>?user=delete&id=<?php echo $row["id"]?> name='delete'
                        type='submit'> Delete </a>
                </td>
                <?php } ?>
            </tr>
           <?php }

            
        }
    ?>
</tbody>
        </table></div>
    
        <?php
        if($_SESSION['group']=='Admins')
            echo"<a style='color:white; font-weight:bold; Background-color:#584e46' href=" . $_SERVER["PHP_SELF"] ."?user=add name='add' type='button' class='btn btn-secondary'>Add User</a>"
        
        ?>
</div>
<br><br>
   
    </center>