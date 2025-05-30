<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['name',
        'category_id',
        'description',
        'quantity',
        'user_id',
        'price'
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function getName(){
        return $this->getAttribute('name');
    }
    public function getDescription(){
        return $this->getAttribute('description');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
