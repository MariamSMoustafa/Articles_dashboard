
<center>

<?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger w-25 p-2 my-3 text-center">
            <?php echo $_GET['error']; ?>
        </div> 
    <?php } ?>      
 <div class="container p-5 w-25 card" style="color:white">
 
 <h4>Delete Group </h4>
 
 <form id="delete-Items" enctype='multipart/form-data' action="<?php echo delete_group()?>" method="POST">
 <p>Are you sure you want to delete this record?</p>
    
     <button name="submit" type="submit" class="btn btn-danger"  >Delete</button>
     <a href= "<?php echo $_SERVER['PHP_SELF']."?group"?>"  class="btn btn-success">Cancel</a>
   </form>
 
     </div>
 
</center>