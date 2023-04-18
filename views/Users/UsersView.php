    <center>
    <?php
    require_once("vendor/autoload.php");
    $handler = new MySQLHandler("users");

    $result = $handler->get_data(["id","name","email","number","group_id"]);


    if (!$handler->connect())

    {

         die('Could not connect: ');

    }

        echo "<table align=center border=1px style=width:600px; line-height:40px;>";
        echo "<tr> 
        <th colspan=6><h2>Users</h2></th> 
        </tr><tr>";

        foreach($result[0] as $key=>$val){
            echo "<th>".$key."</th>";
        }

    echo "<th>Action</th></thead></tr>";
    

    foreach($result as $row)

    {

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['number'] . "</td>";

        echo "<td>" . $row['group_id'] . "</td>";

        echo  
         "<td>
         <a href='". $_SERVER["PHP_SELF"]. "?id=". $row["id"]. "'> Edit </a>
         <a href='". $_SERVER["PHP_SELF"]. "?id=". $row["id"]. "'> Delete </a>
         </td> ";

        

        echo "</tr>";

    }

        echo "</table>";
    ?>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
        Add User
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">New User</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
                <div class="form-group">
                <label for="name">User Name:</label>
                <input type="text" class="form-control" id="p_name" required>
                </div>
                <div class="form-group">
                <label for="price">User Email:</label>
                <input type="text" class="form-control" id="p_email" required>
                </div>
                <div class="form-group">
                <label for="qty">Group:</label>
                <input type="number" class="form-control" id="p_group" required>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add User</button>
                </div>
            </form>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
            </div>
        </div>
        
        </div>
    </div>
    </center>