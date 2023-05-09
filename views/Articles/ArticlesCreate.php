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

           
                
            <h4 style="color:#3B3131">Add Article</h4>
                <form method="POST" action="<?php echo store_article()?>" enctype="multipart/form-data" class="container card " style="width:48%;">
                
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
                    <button class=" button-33 "  name="submit" class="btn btn-success d-flex justify-content-center ml-50" id="upload" style="height:40px;width:150px ;  margin-left:230px">Add article</button>  
                </form>
    
            </center>
        </body>      
    </html>