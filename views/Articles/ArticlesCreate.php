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
                
            <h4 style="color:#3B3131">Add Article</h4>
                <form method="POST" action="<?php echo store_article()?>" enctype="multipart/form-data">
                
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Summery</label>
                        <textarea name="summery" type="text" class="form-control" id="exampleFormControlInput1" required></textarea>
                    </div>
                
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full Article</label>
                        <textarea name="full-article" type="text" class="form-control" id="exampleFormControlInput1" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleFormControlTextarea1" required >
                    </div>
                    <button style="background-color:#3B3131; color:white; border:none" name="submit" class="btn btn-success">Submit</button>
                </form>
            </div>

             

            </body>
            
    </html>