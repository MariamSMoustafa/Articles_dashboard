<center>
    <?php
    require_once("../../vendor/autoload.php");

    $handler = new MySQLHandler("users");
    if(isset($_GET['id'])){
    $groupid=intval($_GET['id']);
$result=$handler->search('group_id', $groupid);
}else{
    $result = $handler->get_data(["id","name","email","number","group_id"]);}


    if (!$handler->connect())
    {

         die('Could not connect: ');

    }

        echo "<table align=center border=1px style=width:600px; line-height:40px;>";
        echo "<tr> 
        <th colspan=6><h2>Users</h2></th> 
        </tr><tr>";

       
            echo "<th>id</th>";
            echo "<th>name</th>";
            echo "<th>email</th>";
            echo "<th>number</th>";
            echo "<th>group </th>";
        

    echo "<th>Action</th></thead></tr>";
    

    foreach($result as $row)

    {

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['number'] . "</td>";

        echo "<td>" . groupname($row['group_id']) . "</td>";


        echo  
         "<td>
         <a  style='color:#584e46; font-weight:bold' href='". $_SERVER["PHP_SELF"]. "?user=". $row["id"]." '> Edit </a><br>
         <a  style='color:#584e46; font-weight:bold' href=" . $_SERVER["PHP_SELF"] ."?user=delete&" ."id=".  $row["id"]  ." name='delete' type='submit'
         
         > Delete </a>  
        
         </td> ";

        echo "</tr>";

    }

        echo "</table>";
    ?>

    <?php
        echo
 
        "<a style='color:white; font-weight:bold; Background-color:#584e46' href=" . $_SERVER["PHP_SELF"] ."?user=add&"  ." name='add' type='button' class='btn btn-secondary'>Add User</a>"

    ?>
   
    


    </center>