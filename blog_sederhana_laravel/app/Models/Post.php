<?php

namespace App\Models;

use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
     //Memdeskripsikan kolom yang boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // Membuat filter pencarian
    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

    // mencari berdasarkan category
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

    // mencari berdasarkan author
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
            )
        );
    }

    // Mendeskripsikan kolom dalam tabel yang tidak boleh di isi
    protected $guarded = ['id'];

    // Membuat Eager Loding untuk menghindari 1+N 
    protected $with = ['author', 'category'];

    // Membuat Relationship One to One
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Membuat Relationship One to One dan mengubah nama tabel user_id menjadi author
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName(){
    return 'slug';
    }

    // membuat slug otomatis
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

