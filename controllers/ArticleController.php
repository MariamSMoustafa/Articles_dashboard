<?php 
function store_article(){            
  // include "../../Database/MySQLHandler.php";
  $handler = new MySQLHandler("articles");
 $userhandler = new MySQLHandler("users");
  $user_name=$userhandler->search('name', $_SESSION['name']);
  $user_id=$user_name[0]["id"];
  if(isset($_POST['submit'])){
    
   $newdata=array("id"=>null,"title"=>$_POST['title'] ,"image"=>"../../assets/images/".$_FILES["image"]['name'], "summery"=>$_POST['summery'] ,"user_id"=>$user_id,"full-article"=>$_POST['full-article']);
   $handler->connect();
   $handler->save($newdata);
   header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article");
  }
}
function show_articles(){
  $handler = new MySQLHandler("articles");
  // $userhandler = new MySQLHandler("users");
  // $userid = $handler->get_data("user_id");
  if(isset($_GET['id'])){
  $result=filter();
}else{
  $result = $handler->get_data(["id","title","summery","full-article","publishing-date","image","user_id"]);
}
  if (!$handler->connect())
  {

       die('Could not connect: ');

  }
  return $result;
}
// function filter(){
//   $handler = new MySQLHandler("srticles");
//   $userid=intval($_GET['id']);
// $result=$handler->search('user_id', $userid);
// return $result;
// }

function delete_article(){
    
 $handler = new MySQLHandler("articles");
 
 $id=intval($_GET['id']);
 $res=$handler->get_record_by_id($id);
 if(isset($_POST['submit'])){
  $handler->connect();
  $handler->delete($id);
  header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article");
}
}

function edit_article(){    
 $handler = new MySQLHandler("articles");
 $id=intval($_GET['article']);
 $res=$handler->get_record_by_id($id);
 return $res;
}
function update_article(){
    $handler = new MySQLHandler("articles");
    $id=intval($_GET['article']);
    if(isset($_POST['update'])){
      if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {        
        move_uploaded_file($_FILES['image']['tmp_name'], "../../assets/images/". $_FILES['image']['name']);
        $newimg=array( "image"=>"../../assets/images/".$_FILES["image"]['name'] );
        $handler->connect();
        $handler->update($newimg,$id);
      }
        $newdata=array("id"=>null,"title"=>$_POST['title'] , "summery"=>$_POST['summery'] ,"full-article"=>$_POST['full-article']);
          $handler->connect();
      $handler->update($newdata,$id);
      header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article");
    
    }
}

function username($userid){
  // $handler = new MySQLHandler("articles");
  $userhandler = new MySQLHandler("users");
   $user_id = $userhandler->get_record_by_id($userid);
  $user_name=$user_id[0]["name"];
  return $user_name;
}