<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopifyAppController extends Controller
{
    public function index(Request $request)
    {
        // Replace with your Shopify store credentials
        $shopifyStore = 'quickstart-16c7bedf.myshopify.com';
        $apiKey = '66c077780a6ee25adb412ae8ab90c2b5';
        $apiPassword = '222efde16ac7b9fe331954f015fe12de';
        // Make a request to Shopify's API to get products
        $client = new \GuzzleHttp\Client();
        $response = $client->get("https://$shopifyStore/admin/api/2022-07/products.json", [
            'auth' => [$apiKey, $apiPassword]
        ]);
        $products = json_decode($response->getBody(), true)['products'];
        return view('shopify.index', compact('products'));
    }
}
