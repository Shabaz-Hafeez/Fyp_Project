@extends('layouts.master')

@section('content')

{{-- <div class="container-fluid">
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
</div> --}}

<div class="content-wrapper mr-5">
{{-- <

// // Set API endpoint and your API key
// $endpoint = 'https://api.sandbox.ebay.com/buy/browse/v1/item_summary/search';
// $api_key = 'ShahbazH-erew-SBX-013fa3adc-fc64b941';

// // Set query parameters
// $params = array(
//     'q' => 'iphone',
//     'limit' => 10,
// );

// // Set request headers
// $headers = array(
//     'Authorization: Bearer ' . $api_key,
//     'Content-Type: application/json',
// );

// // Make API request and retrieve response
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $endpoint . '?' . http_build_query($params));
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// $data = json_decode($response, true);

// var_dump($data);
// curl_close($ch);

// // Print product information
// // foreach ($data['itemSummaries'] as $item) {
// //     echo $item['title'] . "\n";
// //     echo $item['price']['value'] . "\n";
// //     echo $item['image']['imageUrl'] . "\n";
// //     echo "---------------\n";
// // } --}}

 <div class="container">
    <h1>Add Product Listing</h1>
    <form action="{{route('addproduct.store')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Product Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Product Description</label>
        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category" required>
          <option value="">Select a category</option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing</option>
          <option value="home">Home &amp; Garden</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="condition" class="form-label">Condition</label>
        <select class="form-select" id="condition" name="condition" required>
          <option value="">Select the condition</option>
          <option value="new">New</option>
          <option value="used">Used</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="image" name="image" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Listing</button>
    </form>
  </div>


</div>

</div>


@endsection