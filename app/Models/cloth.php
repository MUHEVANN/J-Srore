<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class cloth extends Model
{
    use HasFactory;
    protected $fillable = [
        
        "nama",
        "jenis",
        "stock",
        "harga",
        "foto",
        "gender",
        "desc",
        'category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}