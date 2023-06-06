<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('add-products');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve the form data
            $title = $_POST["title"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $condition = $_POST["condition"];
            $category_id = $_POST["category_id"];
            $postal_code = $_POST["postal_code"];
            $country = $_POST["country"];
            $shipping_type = $_POST["shipping_type"];
            $shipping_service = $_POST["shipping_service"];
            $shipping_cost = $_POST["shipping_cost"];
            $returns_accepted = $_POST["returns_accepted"];
            $refund_mode = $_POST["refund_mode"];

            // Create an array for the request payload
            $payload = array(
                "title" => $title,
                "description" => $description,
                "price" => $price,
                "quantity" => $quantity,
                "condition" => $condition,
                "category_id" => $category_id,
                "location" => array(
                    "postal_code" => $postal_code,
                    "country" => $country
                ),
                "shipping" => array(
                    "shipping_type" => $shipping_type,
                    "shipping_service" => $shipping_service,
                    "shipping_cost" => $shipping_cost
                ),
                "return_policy" => array(
                    "returns_accepted" => $returns_accepted,
                    "refund_mode" => $refund_mode
                )
            );

          dd($payload);

            // Convert the payload to JSON
            $payload_json = json_encode($payload);

            // Set your eBay access token
            $access_token = "v^1.1#i^1#r^0#f^0#p^3#I^3#t^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";

            // Set the API endpoint URL
            // $url = "https://api.ebay.com/sell/inventory/v1/inventory_item/ITEM_ID";
            $url = "https://api.ebay.com/sell/inventory/v1/inventory_item/{sku}";

            // Create a curl request
            $curl = curl_init($url);

            // Set the request method to PUT
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");

            // Set the request headers
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Authorization: Bearer " . $access_token
            ));

            // Set the request payload
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload_json);

            // Execute the request
            $response = curl_exec($curl);

            // Close the curl connection
            curl_close($curl);

            // Check the response
            if ($response) {
                echo "Product listed on eBay successfully!";
            } else {
                echo "Error listing the product on eBay.";
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve the form data
            $title = $_POST["title"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            // $quantity = $_POST["quantity"];
            $condition = $_POST["condition"];
            $image = $_POST["image"];
            // $category_id = $_POST["category_id"];
            // $postal_code = $_POST["postal_code"];
            // $country = $_POST["country"];
            // $shipping_type = $_POST["shipping_type"];
            // $shipping_service = $_POST["shipping_service"];
            // $shipping_cost = $_POST["shipping_cost"];
            // $returns_accepted = $_POST["returns_accepted"];
            // $refund_mode = $_POST["refund_mode"];

            // Create an array for the request payload
            $payload = array(
                "title" => $title,
                "description" => $description,
                "price" => $price,
                // "quantity" => $quantity,
                "condition" => $condition,
                "image" => $image,
                // "category_id" => $category_id,
                // "location" => array(
                //     "postal_code" => $postal_code,
                //     "country" => $country
                // ),
                // "shipping" => array(
                //     "shipping_type" => $shipping_type,
                //     "shipping_service" => $shipping_service,
                //     "shipping_cost" => $shipping_cost
                // ),
                // "return_policy" => array(
                //     "returns_accepted" => $returns_accepted,
                //     "refund_mode" => $refund_mode
                // )
            );

           

            // Convert the payload to JSON
            $payload_json = json_encode($payload);
            // dd($payload);
            // Set your eBay access token
            $access_token = "v^1.1#i^1#r^0#p^3#I^3#f^0#t^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";

            // Set the API endpoint URL
            // $url = "https://api.ebay.com/sell/inventory/v1/inventory_item/ITEM_ID";
            $url = "https://api.ebay.com/sell/inventory/v1/inventory_item/{sku}";

            // Create a curl request
            $curl = curl_init($url);

            // Set the request method to PUT
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");

            // Set the request headers
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Authorization: Bearer " . $access_token
            ));

            // Set the request payload
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload_json);
            dd($curl);

            // Execute the request
            $response = curl_exec($curl);

            // Close the curl connection
            curl_close($curl);

            // Check the response
            if ($response) {
                echo "Product listed on eBay successfully!";
            } else {
                echo "Error listing the product on eBay.";
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
