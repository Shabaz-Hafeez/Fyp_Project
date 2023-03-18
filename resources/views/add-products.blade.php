@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="layout-specing">
        <h5 class="mb-2">Add Products</h5>
<form>
  <div class="mb-3">
    <label for="product-name" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="product-name" placeholder="Enter product name">
  </div>
  <div class="mb-3">
    <label for="product-description" class="form-label">Product Description</label>
    <textarea class="form-control" id="product-description" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="product-image" class="form-label">Product Image</label>
    <input type="file" class="form-control" id="product-image">
  </div>
  <div class="mb-3">
    <label for="product-price" class="form-label">Product Price</label>
    <input type="number" class="form-control" id="product-price" placeholder="Enter product price">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="product-sale">
    <label class="form-check-label" for="product-sale">On Sale</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

@endsection