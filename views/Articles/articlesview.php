<center>    
<?php
    require_once("../../vendor/autoload.php");
    $handler = new MySQLHandler("articles");

    $searchErr = '';
    $search_details='';


    if(isset($_GET['id'])){
        $userid=intval($_GET['id']);
        $search_details=$handler->search('user_id', $userid);
    }
    else{
        $search_details = show_articles();
    }
    
    if (!$handler->connect())
    {

            die('Could not connect: ');

    }


    if(isset($_POST['save']))
    {
        if(!empty($_POST['search']))
        {
            $search = $_POST['search'];
            $search_details = $handler->search_fun("id","title","$search");
            if(empty($search_details)){
                $searchErr = "There is no data like the one you entered!";
                $search_details = show_articles();
              }
        }
        else
        {
            $searchErr = "Please enter what you want to search for!";
        }
    }
    else{
        $search_details = show_articles();
    }
    ?>

<div class="container p-5">
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
    $handler = new MySQLHandler("articles");


        echo "<table align=center border=1px style=width:600px; line-height:40px;>";
        echo "<tr> 
        <th colspan=8><h2>Articles</h2></th> 
        </tr><tr>";


            echo "<th>id</th>";
            echo "<th>title</th>";
            echo "<th>summery</th>";
            echo "<th>full_article</th>";
            echo "<th>publishing-date</th>";
            echo "<th>image</th>";
            echo "<th>Article creator</th>";



    echo "<th>Action</th></thead></tr>";
    

if($search_details) {
    foreach($search_details as $row) {

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['summery'] . "</td>";
        echo "<td>" . $row['full-article'] . "</td>";
        echo "<td>" . $row['publishing-date'] . "</td>";
        echo "<td>" ."<image class='mt-2 w-25' src=".$row['image'] ." >" . "</td>";
        echo "<td>" . username($row['user_id']) . "</td>";

        echo
         "<td>
         <a  style='color:#584e46; font-weight:bold' href='". $_SERVER["PHP_SELF"]. "?article=". $row["id"]. "'> Edit </a>
         <a  style='color:#584e46; font-weight:bold'  href=" . $_SERVER["PHP_SELF"] ."?article=delete&" ."id=".  $row["id"]  ." name='delete' type='submit'> Delete </a>
         </td> ";

        echo "</tr>";

    }

    echo "</table>";
}

        echo "<a style='color:white; font-weight:bold; Background-color:#584e46' href=" . $_SERVER["PHP_SELF"] ."?article=add name='add' type='button' class='btn btn-secondary'>Add Article</a>";
    ?>
    </div>
   
    



</center>