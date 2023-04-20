<center>
        
<?php
    require_once("vendor/autoload.php");
    $handler = new MySQLHandler("articles");

    $result = $handler->get_data(["id","title","summery","full-article","publishing-date","user_id"]);


    if (!$handler->connect())

    {

         die('Could not connect: ');

    }

        echo "<table align=center border=1px style=width:600px; line-height:40px;>";
        echo "<tr> 
        <th colspan=7><h2>Articles</h2></th> 
        </tr><tr>";

        foreach($result[0] as $key=>$val){
            echo "<th>".$key."</th>";
        }

    echo "<th>Action</th></thead></tr>";
    

    foreach($result as $row)

    {

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['summery'] . "</td>";
        echo "<td>" . $row['full-article'] . "</td>";
        echo "<td>" . $row['publishing-date'] . "</td>";

        echo "<td>" . $row['user_id'] . "</td>";

        echo  
         "<td>
         <a href='". $_SERVER["PHP_SELF"]. "?article=". $row["id"]. "'> Edit </a>
         <a > Delete </a>
         </td> ";

        

        echo "</tr>";

    }

        echo "</table>";
    ?>

    <?php
        echo '<a href="views\Articles\add.php">
        <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
           Add User
        </button>
        </a>';
    ?>
   
    



</center>