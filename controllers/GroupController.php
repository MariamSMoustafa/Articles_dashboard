<?php 
function store_group(){            
            $handler = new MySQLHandler("groups");

            if(isset($_POST['submit'])){
             $newdata=array("id"=>null,"name"=>$_POST['name'] ,"icon"=>$_POST['icon'], "description"=>$_POST['description']);
             $handler->connect();
             $handler->save($newdata);
             header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
            }
}