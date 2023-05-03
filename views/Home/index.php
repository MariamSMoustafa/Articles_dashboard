<?php 
include "../../adminHeader.php";
include "../../sidebar.php";
require_once("../../controllers/ArticleController.php");
require_once("../../controllers/GroupController.php");
require_once("../../controllers/UserController.php");    
require_once("../../vendor/autoload.php");  

                   ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css"/>
        <!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <title>Admin</title>
    </head>

</html>

<?php
 $currentpage = $_SERVER['REQUEST_URI'];
//  $url_components = parse_url($currentpage);
//  parse_str($url_components['query'], $params);

 if($_SESSION['group'] !='Admins' && $_SESSION['group']!='Editors'){
        
    if(isset($_GET["article"])){
        header('Location: /articles_dashboard/views/Home/index.php');
    }
   }
if(isset($_GET["group"])&&!isset($_GET["delete"])){
    if($_GET["group"]==intval($_GET["group"])){ 
        require_once("../Groups/Groupedit.php");
         }
         elseif(($_GET["group"])=='delete'){
            
             require_once("../Groups/Groupdelete.php"); 
         }
         else if(($_GET["group"])=='add'){
            
            require_once("../Groups/GroupCreate.php");
        }
         else{
             require_once("../Groups/GroupsView.php"); 
         }
     }

    elseif(isset($_GET["user"])&&!isset($_GET["delete"])){
        if($_GET["user"]==intval($_GET["user"])) {
            if($_SESSION['group']=='Admins'){
            
            require_once("../Users/UsersEdit.php");
            }
            else{echo "<div class='alert alert-success'>you don't have the permission to edit in user data!</div>";}
        }
        else if(($_GET["user"])=='delete'){
            if($_SESSION['group']=='Admins'){
            require_once("../Users/UsersDelete.php");}
            else{echo "<div class='alert alert-success'>you don't have the permission to delete user!</div>";}
        }
        else if(($_GET["user"])=='add'){
            if($_SESSION['group']=='Admins'){
            require_once("../Users/UsersCreate.php");}
            else{echo "<div class='alert alert-success'>you don't have the permission to add user!</div>";}
        }
        else{
            require_once("../Users/UsersView.php"); 
        }
    }

    elseif(isset($_GET["article"])&&!isset($_GET["delete"])){
        if($_GET["article"]==intval($_GET["article"])){
          
                 require_once("../Articles/ArticlesEdit.php");
             }
             elseif(($_GET["article"])=='delete'){
               
                 require_once("../Articles/ArticlesDelete.php"); 
             }
               else if(($_GET["article"])=='add'){
                
                require_once("../Articles/ArticlesCreate.php");
            }
             else{
                 require_once("../Articles/ArticlesView.php"); 
             }
        }
        elseif($currentpage=="/articles_dashboard/views/Home/index.php"  ){
       
        echo "<div class='container'>";
        echo "<div class='row my-2'>";
        echo "<div class='col-md-6 py-1'>";
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<canvas id='chLine'></canvas>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='col-md-6 py-1'>";
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo " <canvas id='chBar'></canvas>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
       }
       
       else{
        if(isset($params)&&!isset($params['group'])|| !isset($params['user'])|| !isset($params['article'])){
       header('Location: /articles_dashboard/views/Error/404.php');}
       header('Location: /articles_dashboard/views/Error/404.php');
       }
?> 

   
    <script type="text/javascript" src="../../assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</script>


</body>
 
</html>