<?php 
function store_article(){            
            // include "../../Database/MySQLHandler.php";
            $handler = new MySQLHandler("articles");

            if(isset($_POST['submit'])){
             $newdata=array("id"=>null,"title"=>$_POST['title'] ,"image"=>"./assets/images/".$_FILES["image"]['name'], "summery"=>$_POST['summery'] ,"user_id"=>$_POST['user_id'],"full-article"=>$_POST['full-article']);
             $handler->connect();
             $handler->save($newdata);
             header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article");
            }
}

function show_articles(){
  $handler = new MySQLHandler("articles");
  if(isset($_GET['id'])){
  $result=filter();
}else{
  $result = $handler->get_data(["id","title","summary","image","full-article", "publishing-date", "user_id"]);
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
        $newdata=array("id"=>null,"title"=>$_POST['title'] , "summery"=>$_POST['summery'] ,"user_id"=>1,"full-article"=>$_POST['full-article']);
          $handler->connect();
      $handler->update($newdata,$id);
      header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article");
    
    }
}