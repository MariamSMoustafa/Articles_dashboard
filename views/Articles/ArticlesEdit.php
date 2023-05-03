<!DOCTYPE html>
    <html>
         <head>
		<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		
         </head>
        <body >
        <div class="container p-5">
        <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger w-100 p-2 my-3 text-center">
                    <?php echo $_GET['error']; ?>
                </div> 
            <?php } ?>
        <h4 style="color:#3B3131">Edit Article Detail</h4>
        <?php $res=edit_article() ?>
        <form id="update-Items" enctype='multipart/form-data' action="<?php echo update_article()?>" method="POST">
            <div class="form-group">
              <label for="title">Title:</label>
              <input name="title" type="text" class="form-control" id="g_title" value="<?=$res[0]['title']?>">
            </div>
            <div class="form-group">
              <label for="summery">Summery:</label>
              <textarea name="summery" type="text" class="form-control" id="g_summery" value="<?=$res[0]['summery']?>"><?=$res[0]['summery']?></textarea>
            </div>
            <div class="form-group">
              <label for="full-article">Full Article:</label>
              <textarea name="full-article" type="text" class="form-control" id="g_full_article" value="<?=$res[0]['full-article']?>"><?=$res[0]['full-article']?></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Image</label>
              <input type="file" name="image" class="form-control" id="exampleFormControlTextarea1" value="<?=$res[0]['image']?>">
              <image name="image" class="mt-2" src="<?=$res[0]['image']?>" style="width: 50px;">
            </div>
              <button style="background-color:#3B3131; color:white; border:none"  name="submit" type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>

    </body>

</html>