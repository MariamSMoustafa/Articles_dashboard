
<h1 class="text-center  mt-5 mb-2 py-3">Add New Product </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
                <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>


                <form class="p-5 border mb-5" method="POST" action="<?php ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required name="name" class="form-control" id="name" >
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" required class="form-control" name="price" id="price">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" required class="form-control" name="description" id="description">
                    </div>

                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" required class="form-control" name="qty" id="qty">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                            
            </div>
        </div>
    </div>
