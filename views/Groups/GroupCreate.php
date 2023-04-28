
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
        <form method="POST" action="<?php echo store_group()?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Group Name:</label>
              <input type="text" name="name" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="price">Icone:</label>
              <input type="number" name="icon" class="form-control" id="p_price" required>
            </div>
            <div class="form-group">
              <label for="qty">Description:</label>
              <input type="text" name="description" class="form-control" id="p_desc" required>
            </div>
            <div class="form-group">
              <button name="submit" class="btn btn-secondary" id="upload" style="height:40px">Add group</button>
            </div>
          </form>

    <script type="text/javascript" src="../../assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
 
</html>