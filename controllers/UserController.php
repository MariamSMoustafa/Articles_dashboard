<?php 
function show_users(){
  $handler = new MySQLHandler("users");
  if(isset($_GET['id'])){
  $result=filter();
}else{
  $result = $handler->get_data(["id","name","email","number","group_id"]);
}
  if (!$handler->connect())
  {

       die('Could not connect: ');

  }
  return $result;
}
function filter(){
  $handler = new MySQLHandler("users");
  $groupid=intval($_GET['id']);
$result=$handler->search('group_id', $groupid);
return $result;
}
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