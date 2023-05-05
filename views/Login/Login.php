<?php
    if(!isset($_SESSION['name'])==true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background-image: url(https://images.unsplash.com/photo-1642030629354-9a9b4e009551?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1188&q=80); 
   background-size: cover;
   background-position: center;
   backdrop-filter: blur(3px);">
<div class="wrapper container" >
<div class="container d-flex flex-column justify-content-end w-50 p-1" >
    <div class="card p-5 m-5" style="background-color: #E4DCCF ;border-radius: 25px">
    <div class="card-header my-3  text-white" style="background-color: #3B3131;"><h2>Welcome</h2></div>
    <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger w-100 p-2 my-3 text-center">
            <?php echo $_GET['error']; ?>
        </div> 
    <?php } ?>
    <form action="controllers/login.php" method="post">
        <div class="mb-3">
            <label class="form-label" style="color: #3B3131;">Username</label>
            <input type="text" class="form-control" name="uname" placeholder="username">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #3B3131;">LOGIN</button>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
<?php 
}  else {
    header("Location: ../articles_dashboard/views/Home/index.php");
    exit();
}
?>