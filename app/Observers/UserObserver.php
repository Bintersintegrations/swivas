<?php

namespace App\Observers;

use App\User;
use App\Notifications\UserEarningNotification;
class UserObserver
{
    
    public function created(User $user)
    {
        //
    }

    
    public function updating(User $user)
    {
        if($user->isDirty('wallet') && $user->wallet > $user->getOriginal('wallet')){
            $user->notify(new UserEarningNotification($user->wallet,$user->getOriginal('wallet')));
        }

    }

    
    public function deleted(User $user)
    {
        //
    }

    
    public function restored(User $user)
    {
        //
    }

    
    public function forceDeleted(User $user)
    {
        //
    }
}
