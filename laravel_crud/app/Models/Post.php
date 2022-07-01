<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    use HasFactory;

    // Mendeskripsikan kolom dalam tabel categories yang tidak boleh diisi
    protected $guarded = ['id'];

    // Membuat relasi one to one
    // Untuk satu post memiliki satu category artikel
    public function posts(){
        return $this->belongsTo(Category::class);
    }

    // Membuat Eager Loding untuk menghidari 1+N
    protected $with = ['user', 'category'];

    // Membuat relasi one to one
    // Untuk satu post memiliki satu user artikel
    public function user(){
        return $this->belongsTo(User::class);
    } 
}
