<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $guarded = [];
    use HasFactory;
    public function photos() {
        return $this->hasMany(Photo::class);
    }
}
