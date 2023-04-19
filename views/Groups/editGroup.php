
<div class="container p-5">

<h4>Edit Group Detail</h4>

<form id="update-Items" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="product_id"  hidden>
    </div>
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="p_name">
    </div>
    <div class="form-group">
      <label for="desc">Product Description:</label>
      <input type="text" class="form-control" id="p_desc" >
    </div>
    <div class="form-group">
      <label for="price">Unit Price:</label>
      <input type="number" class="form-control" id="p_price">
    </div>
    <div class="form-group">
      <label>Category:</label>
      <select id="category">
       
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["product_image"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['product_image']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
    
  </form>

    </div>