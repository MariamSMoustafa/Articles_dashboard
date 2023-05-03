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
      <center>
        <div class="container card " style="width:48%;">

        <h4 style="color:white">Add Group</h4>
        <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger w-100 p-2  text-center">
                    <?php echo $_GET['error']; ?>
                </div> 
            <?php } ?>
                <form method="POST" action="<?php echo store_group()?>" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="name" class="form-label">Name:</label>
                      <input type="text" name="name" class="form-control" id="p_name" required>
                    </div>
                    <div class="mb-3">
                      <label for="image" class="form-label">Icone:</label>
                      <input type="file" name="icon" class="form-control" id="exampleFormControlTextarea1" required >
                  </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description:</label>
                      <input type="text" name="description" class="form-control" id="p_desc" required>
                    </div>
                    <div class="mb-3">
                      <button class="button-33"  name="submit" class="btn btn-success" id="upload" style="height:40px">Add group</button>
                    </div>
                </form>
        </div>
      </center>
       </body>
 
</html>