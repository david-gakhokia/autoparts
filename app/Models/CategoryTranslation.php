<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['name', 'description', 'parent_id', 'restaurant', 'rank', 'status', 'image_svg' ,'image'];
}
