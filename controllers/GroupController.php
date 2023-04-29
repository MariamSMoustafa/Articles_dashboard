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
function show_groups(){
    $handler = new MySQLHandler("groups");
$result = $handler->get_data(["id","name","icon","description"]);

if (!$handler->connect())

  {

  die('Could not connect: ');

  }
  return $result;
}
function delete_group(){

    $handler = new MySQLHandler("groups");
    $userhandler=new MySQLHandler("users");
    $id=intval($_GET['id']);
    $res=$handler->get_record_by_id($id);
    if(isset($_POST['submit'])){
        $handler->connect();
     if(!$userhandler->search('group_id', $id)){
     $handler->delete($id);
     header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");}
    
    else{
        header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
          
        }
    }
}
    


function edit_group(){  
    $handler = new MySQLHandler("groups"); 
   
 $id=intval($_GET['group']);
 $res=$handler->get_record_by_id($id);
 return $res;
}
function update_group(){
    $handler = new MySQLHandler("groups");

    $id=intval($_GET['group']);
    $res=$handler->get_record_by_id($id);
    if(isset($_POST['submit'])){
        if(file_exists($_FILES['icon']['tmp_name']) || is_uploaded_file($_FILES['icon']['tmp_name'])) {        
            move_uploaded_file($_FILES['icon']['tmp_name'], "../../assets/images/". $_FILES['icon']['name']);
            $newimg=array( "icon"=>"../../assets/images/".$_FILES["icon"]['name'] );
            $handler->connect();
            $handler->update($newimg,$id);
        }
 
     $newdata=array("name"=>$_POST['name'] ,"description"=>$_POST['desc']);
     $handler->connect();
     $handler->update($newdata,$id);
     header("Location: http://localhost/Articles_dashboard/views/Home/index.php?group");
    }
}