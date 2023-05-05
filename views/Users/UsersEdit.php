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
            <h4 style="color:#3B3131">Edit User Detail</h4>
            <?php $res=edit_user() ?>
            <form id="update-Items" enctype='multipart/form-data' action="<?php echo update_user()?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="product_id"  hidden>
                </div>
                <div class="form-group">
                    <label for="name">User Name:</label>
                    <input name="name" type="text" class="form-control" id="u_name" value="<?=$res[0]['name']?>" required> 
                </div>
                <div class="form-group">
                    <label for="desc">User Number:</label>
                    <input name="number" type="text" class="form-control" id="u_num" value="<?=$res[0]['number']?>" required>
                </div>
                <div class="form-group">
                    <label for="icone">Group :</label>
                    <input name="group_id" type="number" class="form-control" id="g_id" value="<?=$res[0]['group_id']?>" required>
                </div>
                <button class="button-33" name="update" type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        </center>
</body>
</html>
    