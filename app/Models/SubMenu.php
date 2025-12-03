<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SubMenu extends Model
{
    use HasFactory, Notifiable;

    protected $table =  'submenus';

    protected $fillable = [
        'name',
        'url',
        'is_active' => 0,
        'icon',
        'order',
        'menu_id',
    ];

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
