<?php 
function store_user(){            
            // include "../../Database/MySQLHandler.php";
            $handler = new MySQLHandler("users");

            if(isset($_POST['submit'])){
             $newdata=array("id"=>null,"name"=>$_POST['name'] , "email"=>$_POST['email'] , "group_id"=>$_POST['group_id'],"number"=>$_POST['number'],"password"=>$_POST['password']);
             $handler->connect();
             $handler->save($newdata);
             header("Location: http://localhost/Articles_dashboard/views/Home/index.php?user");
            }
}

function delete_user(){
    
 $handler = new MySQLHandler("users");
 
 $id=intval($_GET['id']);
 $res=$handler->get_record_by_id($id);
 if(isset($_POST['submit'])){
  $handler->connect();
  $handler->delete($id);
  header("Location: http://localhost/Articles_dashboard/views/Home/index.php?user");
}
}

function edit_user(){    
 $handler = new MySQLHandler("users");
 $id=intval($_GET['user']);
 $res=$handler->get_record_by_id($id);
 return $res;
}
function update_user(){
    $handler = new MySQLHandler("users");
    $id=intval($_GET['user']);
    if(isset($_POST['update'])){
        $newdata=array("name"=>$_POST['name'] ,"number"=>$_POST['number'],"group_id"=>$_POST['group_id']);
          $handler->connect();
      $handler->update($newdata,$id);
      header("Location: http://localhost/Articles_dashboard/views/Home/index.php?user");
    
    }
}

function groupname($groupid){
  $userhandler = new MySQLHandler("groups");
   $group_id = $userhandler->get_record_by_id($groupid);
  $group_name=$group_id[0]["name"];
  return $group_name;
}