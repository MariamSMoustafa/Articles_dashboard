              
<div class="container p-5">

<h4 style="color:#584e46">Add User</h4>
<form method="POST" action="<?php echo store_user()?>" enctype="multipart/form-data">
        
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">name</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">email</label>
                <textarea name="email" type="email" class="form-control" id="exampleFormControlInput1" required></textarea>
            </div>
        
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">number</label>
                <textarea name="number" type="number" class="form-control" id="exampleFormControlInput1" required></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">password</label>
                <textarea name="password" type="password" class="form-control" id="exampleFormControlInput1" required></textarea>
            </div>
        
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Group</label>
                <textarea name="group_id" type="group_id" class="form-control" id="exampleFormControlInput1" required></textarea>
                
                        
            </div> 
            <button style="background-color:#584e46; color:white; border:none" name="submit" class="btn btn-success">Submit</button>
        </form>

    </div>

    