<?php
namespace App\Http\Traits;
use App\Giving;
use App\Auction;
use App\Product;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;

trait WishlistDatabaseTrait
{
    protected function addProductToWishDb(Product $product){
        $user = Auth::user();
        $dbwish = Wishlist::firstOrCreate(['user_id' => $user->id,'wishable_id' => $product->id,'wishable_type' => 'App\Product']);
    }
    protected function addGivingToWishDb(Giving $giving){
        $user = Auth::user();
        $dbwish = Wishlist::firstOrCreate(['user_id' => $user->id,'wishable_id' => $giving->id,'wishable_type' => 'App\Giving']);
    }
    protected function addAuctionToWishDb(Auction $auction){
        $user = Auth::user();
        $dbwish = Wishlist::firstOrCreate(['user_id' => $user->id,'wishable_id' => $auction->id,'wishable_type' => 'App\Auction']);
    }
}

