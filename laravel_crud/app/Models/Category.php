<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    use HasFactory;

    // Mendeskripsikan kolom dalam tabel categories yang tidak boleh diisi
    protected $guarded = ['id'];

    // Membuat relasi one to many
    // Untuk satu category memiliki banyak post artikel
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
