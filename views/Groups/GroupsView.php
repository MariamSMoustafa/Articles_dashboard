<center>
<?php

require_once("../../vendor/autoload.php");
    $handler = new MySQLHandler("groups");
  $searchErr = '';
  $search_details='';
  if(isset($_POST['save']))
  {
    if(!empty($_POST['search']))
    {
      $search = $_POST['search'];
      $search_details = $handler->search_fun("id","name","$search");
    }
    else
    {
      $searchErr = "Please enter what you want to search for!";
    }
      
  }
  else{
    $search_details = $handler->get_data(["id","name","icon","description"]);

  }
?>


<div class="container p-5" style="align:center; width:740px;">
	<form class="form-horizontal" action="#" method="post">
  <div class="input-group mb-3">
      <input name="search" type="text" placeholder="search here" class="form-control" aria-describedby="button-addon2">
      <button type="submit" name="save" class="btn btn-outline-secondary" id="button-addon2">Search</button>
  </div>
		<div class="form-group">
			<span class="error" style="color:red;"><?php echo $searchErr;?></span>
		</div>
    </form>

<?php
require_once("../../vendor/autoload.php");


    echo "<table align=center border=1px style=width:600px; line-height:40px;>";
    echo "<tr> 
<th colspan=6><h2>Groups Record</h2></th> 
</tr><tr>";
    foreach($search_details[0] as $key=>$val) {



        echo "<th>".$key."</th>";



    }

    echo "<th>Action</th></thead></tr>";

    if($search_details)
    {
    foreach($search_details as $row) {

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td><a style='color:#584e46; font-weight:bold'  href='" . $_SERVER["PHP_SELF"] . "?user=filter&". "id=" . $row["id"] ."' >" . $row['name'] . "</a></td>";

        echo "<td>" ."<image class='mt-2 w-25' src=".$row['icon'] ." >" . "</td>";

        echo "<td>" . $row['description'] . "</td>";

        echo   "<td>
  <a style='color:#584e46; font-weight:bold' href='" . $_SERVER["PHP_SELF"] . "?group=" . $row["id"] . "'> Edit </a><br>
  
  <a style='color:#584e46; font-weight:bold' href=" . $_SERVER["PHP_SELF"] ."?group=delete&" ."id=" . $row["id"] ." name='delete' type='submit'> Delete </a>
  
  </td> ";

        echo "</tr>";

    }

    echo "</table>";


}

?>
<?php
        echo "<a style='color:white; font-weight:bold; Background-color:#584e46' href=" . $_SERVER["PHP_SELF"] ."?group=add&" ."id=" . $row["id"] ." name='add' type='button' class='btn btn-secondary'>Add Group</a>";
    ?>
</div>
  
  </center>

