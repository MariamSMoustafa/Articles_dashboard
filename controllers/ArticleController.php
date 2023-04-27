<?php 
function store_article(){            
            // include "../../Database/MySQLHandler.php";
            $handler = new MySQLHandler("articles");

            if(isset($_POST['submit'])){
             $newdata=array("id"=>null,"title"=>$_POST['title'] , "summery"=>$_POST['summery'] ,"user_id"=>$_POST['user_id'],"full-article"=>$_POST['full-article']);
             $handler->connect();
             $handler->save($newdata);
             header("Location: http://localhost/Articles_dashboard/index.php?article");
            }
}

function delete_article(){
    
 $handler = new MySQLHandler("articles");
 
 $id=intval($_GET['id']);
 $res=$handler->get_record_by_id($id);
 if(isset($_POST['submit'])){
  $handler->connect();
  $handler->delete($id);
  header("Location: http://localhost/Articles_dashboard/index.php?article");
 }
}

function edit_article(){
     
 $handler = new MySQLHandler("articles");
 $id=intval($_GET['article']);
 $res=$handler->get_record_by_id($id);
 if(isset($_POST['update'])){
    $newdata=array("id"=>null,"title"=>$_POST['title'] , "summery"=>$_POST['summery'] ,"user_id"=>1,"full-article"=>$_POST['full-article']);
      $handler->connect();
  $handler->update($newdata,$id);
  header("Location: http://localhost/Articles_dashboard/index.php?article");
}
}