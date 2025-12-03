<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'icon',
        'order',
        'is_active'
    ];

    public function submenu(){
        return $this->hasMany(SubMenu::class, 'menu_id');
    }
}
