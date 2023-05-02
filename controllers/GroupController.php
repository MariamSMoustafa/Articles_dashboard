<?php 
function store_group(){            
<<<<<<< Updated upstream
    try{        
        $handler = new MySQLHandler("groups");
        if(isset($_POST['submit'])){
            if ($_FILES['icon']['type'] == 'image/png' || $_FILES['icon']['type']  == 'image/jpeg' ) {
                move_uploaded_file($_FILES['icon']['tmp_name'], "../../assets/images/". $_FILES['icon']['name']);
                $newdata=array("id"=>null,"name"=>$_POST['name'] ,"icon"=>"../../assets/images/".$_FILES["icon"]['name'] , "description"=>$_POST['description']);
                $handler->connect();
                $handler->save($newdata);
                header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
            }else{
                header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group=add&error=image type not supported, must be image/png or image/jpeg");      }
                throw new Exception("group create failed because of image wrong format");
        }
    }
    catch(Exception $e){
        $exc=$e->getMessage();
          $date = date('d.m.Y h:i:s');
          $log = $exc."   |  Date:  ".$date."\n";
          echo 'error';
          error_log("$log", 3, "../../assets/log-files/log.log");
      }
}


function show_groups(){
    $handler = new MySQLHandler("groups");
    if(isset($_GET['name'])){

    }else{
        $result = $handler->get_data(["id","name","icon","description"]);
    }

    if (!$handler->connect())

    {

    die('Could not connect: ');

    }
    return $result;
}


function delete_group(){
try{
    $handler = new MySQLHandler("groups");
    $userhandler=new MySQLHandler("users");
    $id=intval($_GET['id']);
    if(isset($_POST['submit'])){
        $handler->connect();
     if(!$userhandler->search('group_id', $id)){
        $handler->delete($id);
        header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");}
    
     else{
        header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group=delete&id=$id&error=can't delete this group"); 
        throw new Exception("this group contains users please delete users first"); 
          
        }
    }}
catch(Exception $e){
    $exc=$e->getMessage();
    $date = date('d.m.Y h:i:s');
    $log = $exc."   |  Date:  ".$date."\n";
    echo 'error';
    error_log("$log", 3, "../../assets/log-files/log.log");
    }
}
    


function edit_group(){  
    $handler = new MySQLHandler("groups"); 
    $id=intval($_GET['group']);
    $res=$handler->get_record_by_id($id);
    return $res;
}


function update_group(){
    try{
    $handler = new MySQLHandler("groups");

    $id=intval($_GET['group']);
    if(isset($_POST['submit'])){
        if(file_exists($_FILES['icon']['tmp_name']) || is_uploaded_file($_FILES['icon']['tmp_name'])) {     
            if($_FILES['icon']['type'] != 'image/png' && $_FILES['icon']['type'] != 'image/jpeg')   {
                header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group=$id&error=image type not supported, must be image/png or image/jpeg");    
                throw new Exception("group edit failed because of image wrong format");
            }
            else{
                move_uploaded_file($_FILES['icon']['tmp_name'], "../../assets/images/". $_FILES['icon']['name']);
                $newimg=array( "icon"=>"../../assets/images/".$_FILES["icon"]['name'] );
                $handler->connect();
                $handler->update($newimg,$id);
               
            }
        }
 
     $newdata=array("name"=>$_POST['name'],"description"=>$_POST['desc']);
     $handler->connect();
     $handler->update($newdata,$id);
     if($_FILES['icon']['type'] == 'image/png' || $_FILES['icon']['type'] == 'image/jpeg')
     header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
    }}
    catch(Exception $e){
        $exc=$e->getMessage();
          $date = date('d.m.Y h:i:s');
          $log = $exc."   |  Date:  ".$date."\n";
          echo 'error';
          error_log("$log", 3, "../../assets/log-files/log.log");
      }
=======
            $handler = new MySQLHandler("groups");

            if(isset($_POST['submit'])){
             $newdata=array("id"=>null,"name"=>$_POST['name'] ,"icon"=>$_POST['icon'], "description"=>$_POST['description']);
             $handler->connect();
             $handler->save($newdata);
             header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
            }
>>>>>>> Stashed changes
}