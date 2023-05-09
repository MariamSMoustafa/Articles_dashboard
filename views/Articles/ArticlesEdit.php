<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		        <style>
              label {
                  color: white ;
                  float: left ;
              }

              .button-33 {
                  background-color: #c2fbd7;
                  border-radius: 100px;
                  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
                  color: green;
                  cursor: pointer;
                  display: inline-block;
                  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
                  padding: 7px 20px;
                  text-align: center;
                  text-decoration: none;
                  transition: all 250ms;
                  border: 0;
                  font-size: 16px;
                  user-select: none;
                  -webkit-user-select: none;
                  touch-action: manipulation;
              }

              .button-33:hover {
                  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
                  transform: scale(1.05) rotate(-1deg);
              }
	          </style>
        </head>
        <body >
        <?php if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger w-100 p-2 my-3 text-center">
                        <?php echo $_GET['error']; ?>
                    </div> 
                <?php } ?>
          <center>
           
          
            <h4 style="color:#3B3131">Edit Article Detail</h4>
            <?php $res=edit_article() ?>
            <form id="update-Items" enctype='multipart/form-data' action="<?php echo update_article()?>" method="POST" class="container card " style="width:48%;">
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
                <button class="button-33" name="submit" type="submit" class="btn btn-primary">Update</button>
            </form>
            </center>
    </body>

</html>