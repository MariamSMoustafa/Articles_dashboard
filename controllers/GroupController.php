<?php 
function store_group(){            
            // include "../../Database/MySQLHandler.php";
            $handler = new MySQLHandler("groups");

            if(isset($_POST['submit'])){
             $newdata=array("id"=>null,"title"=>$_POST['title'] ,"image"=>"./assets/images/".$_FILES["image"]['name'], "summery"=>$_POST['summery'] ,"user_id"=>$_POST['user_id'],"full-article"=>$_POST['full-article']);
             $handler->connect();
             $handler->save($newdata);
             header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
            }
}

function delete_group(){
    
 
 $id=intval($_GET['id']);
 $res=$handler->get_record_by_id($id);
 if(isset($_POST['submit'])){
  $handler->connect();
  $handler->delete($id);
  header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
}
}

function edit_group(){    
 $id=intval($_GET['group']);
 $res=$handler->get_record_by_id($id);
 return $res;
}
function update_group(){
    
    $id=intval($_GET['group']);
    if(isset($_POST['update'])){
        $newdata=array("id"=>null,"title"=>$_POST['title'] , "summery"=>$_POST['summery'] ,"user_id"=>1,"full-article"=>$_POST['full-article']);
          $handler->connect();
      $handler->update($newdata,$id);
      header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
    
    }
}