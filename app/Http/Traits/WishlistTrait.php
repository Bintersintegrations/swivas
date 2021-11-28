<?php
namespace App\Http\Traits;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;

trait WishlistTrait
{
    protected function addWishlist($product_id){
        $user = Auth::user();
        $wishlist = Wishlist::firstOrCreate(['user_id' => $user->id,'product_id' => $product_id]);
    }
    protected function removeWishlist($product_id){
        $user = Auth::user();
        $wishlist = Wishlist::where('user_id',$user->id)->where('product_id',$product_id)->delete();
    }
    
}

