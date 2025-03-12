<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductsImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public $importMessage = '';
    public function collection(Collection $collection)
    {
        // dd($collection);
        $exit_product_msg = [];
        $message = "";
        $added_products = 0;
        $ignored_products = 0;
        
        foreach ($collection as $collection_key => $collection_value) {
            if($collection_key==0){
                continue;
            }else{
                $product_name = implode(' ',array_filter($collection_value->toArray()));
                // dd($product_name);
                $exit_product = Product::where('name',$product_name)->first();
                if($exit_product){
                    // append message
                    $exit_product_msg[]= $product_name;
                    $ignored_products++;
                    continue;
                }elseif($product_name==null){
                    continue;
                }else{
                    $products = new Product();
                    $products->name = $product_name;
                    $products->save();
                    $added_products++;
                }
            }
            
            // dd($collection_value[0]);
        }
        if($exit_product_msg){
            $message .= "<span style='color:red;'>'".__('products_exist', ['products' => implode(', ', array_unique($exit_product_msg))])."</span><br>";
        }
        $message .= "<span style='color:green;'>'".__('products_added', ['products' => $added_products])."</span><br>";
        $message .= "<span style='color:blue;'>'".__('products_ignored', ['products' => $ignored_products])." </span>";
        return $this->importMessage = $message;
    }
}
