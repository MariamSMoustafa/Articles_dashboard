<center>
<?php
require_once("../../vendor/autoload.php");
$handler = new MySQLHandler("users");
$searchErr = '';
$search_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $search_details = $handler->search_fun("id","name","$search");
        if(empty($search_details)){
            $searchErr = "There is no data like the one you entered!";
            $search_details =show_users();
        }
    }
    else
    {
        $search_details =show_users();
        $searchErr = "Please enter what you want to search for!";
    }
  
}
else{
    $search_details =show_users();
}
?>

<div class="container px-5" style="align:center; width:720px;">
	<form class="form-horizontal" action="#" method="post">
        <div class="input-group mb-3">
            <input name="search" type="text" placeholder="search here" class="form-control" aria-describedby="button-addon2">
            <button type="submit" name="save" class="btn btn-outline-secondary mx-2" id="button-addon2">Search</button>
        </div>
		<div class="form-group">
			<span class="error" style="color:red;"><?php echo $searchErr;?></span>
		</div>
    </form>

    <?php
        require_once("../../vendor/autoload.php");
        echo "<table align=center border=1px style=width:600px; line-height:40px;>";
        echo "<tr> 
        <th colspan=6><h2>Users</h2></th> 
        </tr><tr>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>email</th>";
        echo "<th>number</th>";
        echo "<th>group </th>";
        

        if($_SESSION['group']=='Admins') {
            echo "<th>Action</th></thead></tr>";
        }
    
        if($search_details) {
            foreach($search_details as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td><a style='color:#584e46; font-weight:bold'  href='" . $_SERVER["PHP_SELF"] . "?article=filter&". "id=" . $row["id"] ."' >" . $row['name'] . "</a></td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['number'] . "</td>";
                echo "<td>" . groupname($row['group_id']) . "</td>";
                if($_SESSION['group']=='Admins') {
                    echo
                    "<td>
                    <a  style='color:#584e46; font-weight:bold' href='". $_SERVER["PHP_SELF"]. "?user=". $row["id"]." '> Edit </a><br>
                    <a  style='color:#584e46; font-weight:bold' href=" . $_SERVER["PHP_SELF"] ."?user=delete&" ."id=".  $row["id"]  ." name='delete' type='submit'
                
                    > Delete </a>  
                
                     </td> ";
                }
                echo "</tr>";
            }

            echo "</table>";
        }
    ?>

        <?php
        if($_SESSION['group']=='Admins')
            echo"<a style='color:white; font-weight:bold; Background-color:#584e46' href=" . $_SERVER["PHP_SELF"] ."?user=add name='add' type='button' class='btn btn-secondary'>Add User</a>"
        
        ?>
</div>
   
    </center>