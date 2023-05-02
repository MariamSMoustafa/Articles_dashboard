<?php 
function store_article(){
    try {
        $handler = new MySQLHandler("articles");
        $userhandler = new MySQLHandler("users");
        $user_name=$userhandler->search('name', $_SESSION['name']);
        $user_id=$user_name[0]["id"];

        if(isset($_POST['submit'])) {
            $file_type = $_FILES['image']['type'];
            if ($file_type == 'image/png' || $file_type == 'image/jpeg') {
                $newdata=array("id"=>null,"title"=>$_POST['title'] ,"image"=>"../../assets/images/".$_FILES["image"]['name'], "summery"=>$_POST['summery'] ,"user_id"=>$user_id,"full-article"=>$_POST['full-article']);
                $handler->connect();
                $handler->save($newdata);
                header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article");
            } else {
                header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article=add&error=image type not supported, must be image/png or image/jpeg");
                throw new Exception("article create failed because of image wrong format");
            }
        }
    } catch(Exception $e) {
        $exc=$e->getMessage();
        $date = date('d.m.Y h:i:s');
        $log = $exc."   |  Date:  ".$date."\n";
        echo 'error';
        error_log("$log", 3, "../../assets/log-files/log.log");
    }
}


function show_articles(){
    $handler = new MySQLHandler("articles");
    if(isset($_GET['id'])){
      $result=articles_filter();
    }else{
      $result = $handler->get_data(["id","title","summery","full-article","publishing-date","image","user_id"]);
    }

    if (!$handler->connect())
    {

        die('Could not connect: ');

    }
    return $result;
}



function delete_article(){
    
    $handler = new MySQLHandler("articles");
    $id=intval($_GET['id']);
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
  try{
    $handler = new MySQLHandler("articles");
    $id=intval($_GET['article']);

    if(isset($_POST['submit'])){
      $file_type = $_FILES['image']['type'];

        if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {   
          if ($file_type == 'image/png' || $file_type == 'image/jpeg' ) {     
              move_uploaded_file($_FILES['image']['tmp_name'], "../../assets/images/". $_FILES['image']['name']);
              $newimg=array( "image"=>"../../assets/images/".$_FILES["image"]['name'] );
              $handler->connect();
              $handler->update($newimg,$id);
        
          }else{
              header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article=$id&error=image type not supported, must be image/png or image/jpeg"); 
              throw new Exception("article edit failed because of image wrong format");   
          }
        }
            $newdata=array("id"=>null,"title"=>$_POST['title'] , "summery"=>$_POST['summery'] ,"full-article"=>$_POST['full-article']);
            $handler->connect();
            $handler->update($newdata,$id);
            header("Location: http://localhost/Articles_dashboard/views/Home/index.php?article");
 
    }

  }catch(Exception $e){
      $exc=$e->getMessage();
        $date = date('d.m.Y h:i:s');
        $log = $exc."   |  Date:  ".$date."\n";
        echo 'error';
        error_log("$log", 3, "../../assets/log-files/log.log");
    }
    
}


function username($userid){
    $userhandler = new MySQLHandler("users");
    $user_id = $userhandler->get_record_by_id($userid);
    $user_name=$user_id[0]["name"];
    return $user_name;
}


function articles_filter(){
  $handler = new MySQLHandler("articles");
  $user_id=intval($_GET['id']);
  $result=$handler->search('user_id', $user_id);
  return $result;
}