<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\File;
use Laravel\Sanctum\HasApiTokens;

class Admin  extends Authenticatable implements FilamentUser,HasAvatar
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes,MustVerifyEmail;
    protected $fillable = [
        'name',
        'email',
        'photo',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@techyfo.com') && $this->hasVerifiedEmail();
    }
    public function getFilamentAvatarUrl(): ?string
    {
        if ($this->photo && File::exists(public_path('uploads/' . $this->photo)) ) {
            return asset('uploads/' . $this->photo);
        } else {
            return asset('website/images/admin.png');
        }
    }
}
