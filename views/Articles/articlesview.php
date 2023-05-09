  
<?php
    $handler = new MySQLHandler("articles");
    $searchErr = '';
    $search_details='';
    $displayErr = 'none';
    if(isset($_POST['save']))
    {
        if(!empty($_POST['search']))
        {
            $search = $_POST['search'];
            $search_details = $handler->search_fun("id","title","$search");
            if(empty($search_details)){
                $displayErr = 'block';
                $searchErr = "There is no data like the one you entered!";
                $search_details =show_articles();
            }
        }
        else
        {
            $displayErr = 'block';
            $search_details =show_articles();
            $searchErr = "Please enter what you want to search for!";
        }
    
    }
    else{
        $search_details =show_articles();
    }
?>
    <!DOCTYPE html>
    <html>
         <head>
		<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />		
         </head>
        <body >
            <center>
<div class="container px-5" style="align:center; width:70%;">
	<form class="form-horizontal" action="#" method="post">
  <div class="input-group mb-3">
      <input name="search" type="text" placeholder="search here" class="form-control " aria-describedby="button-addon2">
      <button type="submit" name="save" style="color:white; font-weight:bold; Background-color:#584e46" class="btn btn-outline-secondary mx-2" id="button-addon2">Search</button>
  </div>
		<div class="form-group">
            <div class="alert alert-danger error" role="alert" style="display: <?php echo $displayErr;?>;">
                <?php echo $searchErr;?>
            </div>
        </div>
    </form>


   

    <div class="mb-2" style="overflow-y:auto;height:380px" >
        <table border="1px" class="px-5 " >
         <thead>
		 <tr>
                <th colspan=8>
                    <h2>Artical Record</h2>
                </th>
            </tr>
            <tr>


            <th>id</th>
           <th>title</th>
        <th>summery</th>
             <th>full_article</th>
             <th>publishing-date</th>
            <th>image</th>
            <th>Article creator</th>
          <th>Action</th></thead></tr>
    
</tr></thead><tbody>
    <?php if($search_details) {
        foreach($search_details as $row) {?>

            <tr>

            <td><?php echo $row['id'] ?> </td>
            <td><?php echo $row['summery'] ?> </td>
            <td><?php echo $row['title'] ?> </td>
            <td><?php echo $row['full-article'] ?> </td>
            <td><?php echo $row['publishing-date'] ?> </td>
       
            <td><image class='mt-2 w-25' src=<?php echo $row['image']?> ></td>
            <td><?php echo username($row['user_id']) ?> </td>

            
        <td>
                       
                    <a style='color:#584e46; font-weight:bold'
                        href=<?php echo $_SERVER["PHP_SELF"] ?>?article=delete&id=<?php echo $row["id"]?> name='delete'
                        type='submit'> Delete </a>
            </td> 

            </tr>

            <?php } } ?>

        </table></div>
    
        <a style='color:white; font-weight:bold; Background-color:#584e46'
            href='<?php echo $_SERVER["PHP_SELF"]?>?article=add' name='add' type='button' class='btn btn-secondary'>Add
            Article</a>

</div>
<br><br>
   
</center>
</body>
</html>