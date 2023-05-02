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
    $articlehandler = new MySQLHandler("articles");
      if(isset($_POST['submit'])) {
        $id=intval($_GET['id']);
        $user_has_article=$articlehandler->search('user_id', $id);
        if ($user_has_article){
          header("Location: http://localhost/Articles_dashboard/views/Home/index.php?user=delete&error=can't delete this user ");
        }
        else {     
        $handler->connect();
          $handler->delete($id);
          header("Location: http://localhost/Articles_dashboard/views/Home/index.php?user");

      }
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