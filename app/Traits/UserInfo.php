<?php

namespace App\Traits;

use App\Helpers\UserHelper;
use App\Models\Account;
use Filament\Panel;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserInfo {

    public function isAdmin(){
        return $this->role === UserHelper::roles('admin');
    }

    public function getFilamentName(): string
    {
        return $this->first_name . ' ' . $this->lastName;
    }

    public function panel(Panel $panel): Panel
    {
        return $panel->authGuard('web');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if($panel->getId() === 'app'){
            // return $this->hasVerifiedEmail();
            return true;
        }

        else if($panel->getId() === 'admin'){
            return $this->isAdmin();
        }

        return false;
    }

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }

}