@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="layout-specing">
        <h5 class="mb-2" class="text-white">Product Upload</h5>
        <form class="bg-secondary">
  <div class="form-group form-control bg-secondary text-white">
    <label for="productTitle" class="text-white">Product Title:</label>
    <input type="text" class="form-control" id="productTitle">
  </div>
  <div class="form-group form-control bg-secondary text-white">
    <label for="productImage" class="text-white">Product Image:</label>
    <input type="file" class="form-control-file" id="productImage">
  </div>
  <div class="form-group form-control bg-secondary text-white">
    <label for="productDescription" class="text-white">Product Description:</label>
    <textarea class="form-control" id="productDescription" rows="3"></textarea>
  </div>
  <div class="form-group form-control bg-secondary text-white">
    <label for="productPrice" class="text-white">Product Price:</label>
    <input type="number" class="form-control" id="productPrice">
  </div>
  <div class="form-group form-control bg-secondary text-white">
    <label for="productCategory" class="text-white">Product Category:</label>
    <select class="form-control" id="productCategory">
      <option>Option 1</option>
      <option>Option 2</option>
      <option>Option 3</option>
    </select>
  </div>
  <div class="form-group form-control bg-secondary text-white">
    <label for="productUPC" class="text-white">Product UPC or EAN:</label>
    <input type="text" class="form-control" id="productUPC">
  </div>
  <div class="form-group form-control bg-secondary text-white">
    <label for="shippingFulfillment" class="text-white">Shipping and Fulfillment:</label>
    <textarea class="form-control" id="shippingFulfillment" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mt-2 text-white" >Upload</button>
</form>


</div>
</div>




@endsection