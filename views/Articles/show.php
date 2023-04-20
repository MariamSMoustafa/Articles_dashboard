<?php 
 
 $handler = new MySQLHandler("articles");
 $id=intval($_GET['articles']);
 $res=$handler->get_record_by_id($id);
//  if(isset($_POST['update'])){
//     $newdata=array("id"=>null,"title"=>$_POST['title'] , "summery"=>$_POST['summery'] ,"user_id"=>1,"full-article"=>$_POST['full-article']);
//       $handler->connect();
//   $handler->update($newdata,$id);
// //   echo "<div class='msg-info'>Record updated</div>";
//  }
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="../../assets/css/style.css"/>
        <!DOCTYPE html>
        <html>
<head>
  <title>Admin</title>
</head>
<body >
<div class="container ">
      <div class="d-inline-flex ">
<div class="card m-3 text-white ">
  <div class="card-header ">
    Article Info
  </div>
  <div class="card-body ">
    <h5 class="card-title">Title:</h5>
    <p class="card-text"><?=$res[0]['title']?></p>

    <h5 class="card-title">image:</h5>
    <img src="" alt="">

    <h5 class="card-title">Summary:</h5>
    <p class="card-text"><?=$res[0]['summery']?></p>

    <h5 class="card-title">Full Article:</h5>
    <p class="card-text"><?=$res[0]['full-article']?></p>

    <h5 class="card-title">Publishing Date:</h5>
    <p class="card-text"><?=$res[0]['publishing-date']?></p>
   
   <p class=" text-danger card-text"><span class="fw-bold"></h5>  </div>
</div>
<!-- <div class="card m-3">
  <div class="card-header">
    Post Creator Info
  </div>
  <div class="card-body">
  <p class="card-title"><span class="fw-bold">Author:</span><br> {{ optional($post->user)->name ?? 'Not Found' }}</h5>
            <p class="card-text"><span class="fw-bold">Email:</span><br> {{optional($post->user)->email ?? 'Not Found'}}</p>
                <p class=" text-danger card-text"><span class="fw-bold">created At:</span><br> {{ $post->created_at->format('l jS \\of F Y h:i:s A') }}</h5>
                
  </div>
</div> -->


      </div>

    <script type="text/javascript" src="../../assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
 
</html>