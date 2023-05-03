<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
            label {
                color: white ;
                float: left ;
            }

/* CSS */
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
    <body>
        <center>
                
        <div class="container card " style="width:48%;">
            <h4 style="color:white">Edit Group Detail</h4>
            <?php if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger w-100 p-2 my-3 text-center">
                        <?php echo $_GET['error']; ?>
                    </div> 
                <?php } ?>
            <?php $res=edit_group()
            ?>
            <form id="update-Items" enctype='multipart/form-data' action="<?php echo update_group()?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="product_id"  hidden>
                </div>
                <div class="form-group">
                    <label for="name">Group Name:</label>
                    <input name="name" type="text" class="form-control" id="g_name" value="<?=$res[0]['name']?>" alt="no image">
                </div>
                <div class="form-group">
                    <label for="desc">Group Description:</label>
                    <input name="desc" type="text" class="form-control" id="g_desc" value="<?=$res[0]['description']?>">
                </div>
                <div class="form-group">
                    <label for="icon">Group Icon:</label>
                    <input type="file" name="icon" class="form-control" id="exampleFormControlTextarea1" >
                </div>
                <!-- <image name="icon" style="float:left; width:75px" class="mt-2" src="<?=$res[0]['icon']?>"> -->
                <button class="button-33"  name="submit" type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
        <center>
    </body>
</html>
