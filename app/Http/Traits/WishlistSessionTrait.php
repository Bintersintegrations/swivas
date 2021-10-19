<?php
namespace App\Http\Traits;

use App\Giving;
use App\Auction;
use App\Product;

trait WishlistSessionTrait
{
    protected function addProductToWishSession(Product $product){
        $wish = request()->session()->get('wish');
        // if wish is empty then this is the first product
        if(!$wish) {
            $wish = [
                    'product-'.$product->id => [
                        "name" => $product->item->name,
                        "amount" => $product->amount,
                        "image" => $product->image->name,
                        "type" => 'App\Product'
                    ]
            ];
            request()->session()->put('wish', $wish);
        }
        if(!isset($wish['product-'.$product->id])){
            // if cart not empty then check if this product does not exist then add it
            $wish['product-'.$product->id] = [
                "name" => $product->item->name,
                "amount" => $product->amount,
                "image" => $product->image->name,
                "type" => 'App\Product'
            ];
            request()->session()->put('wish', $wish);
        }
        return $wish;
    }

    protected function addGivingToWishSession(Giving $giving){
        $wish = request()->session()->get('wish');
        // if wish is empty then this is the first giving
        if(!$wish) {
            $wish = [
                'giving-'.$giving->id => [
                        "name" => $giving->item->name,
                        "expire_at" => $giving->expire_at,
                        "image" => $giving->item->media->where('format','image')->first()->name,
                        "type" => 'App\Giving'
                    ]
            ];
            request()->session()->put('wish', $wish);
        }
        if(!isset($wish['giving-'.$giving->id])){
            // if cart not empty then check if this giving does not exist then add it
            $wish['giving-'.$giving->id] = [
                "name" => $giving->item->name,
                "expire_at" => $giving->expire_at,
                "image" => $giving->item->media->where('format','image')->first()->name,
                "type" => 'App\Giving'
            ];
            request()->session()->put('wish', $wish);
        }
        return $wish;
    }

    protected function addAuctionToWishSession(Auction $auction){
        $wish = request()->session()->get('wish');
        // if wish is empty then this is the first giving
        if(!$wish) {
            $wish = [
                'auction-'.$auction->id => [
                        "name" => $auction->item->name,
                        "expire_at" => $auction->expire_at,
                        "image" => $auction->item->media->where('format','image')->first()->name,
                        "type" => 'App\Auction'
                    ]
            ];
            request()->session()->put('wish', $wish);
        }
        if(!isset($wish['auction-'.$auction->id])){
            // if cart not empty then check if this giving does not exist then add it
            $wish['auction-'.$auction->id] = [
                "name" => $auction->item->name,
                "expire_at" => $auction->expire_at,
                "image" => $auction->item->media->where('format','image')->first()->name,
                "type" => 'App\Auction'
            ];
            request()->session()->put('wish', $wish);
        }
        return $wish;
    }
}

