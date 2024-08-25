<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Author extends Model
{
    use HasFactory, SoftDeletes;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = $model->generateUniqueSlug($model->name);
        });

        static::updating(function ($model) {
            $model->slug = $model->generateUniqueSlug($model->slug);
        });
    }
    protected function generateUniqueSlug($name): string
    {
        // Generate a slug from the name
        $slug = Str::slug($name);

        // Check if the slug already exists
        $originalSlug = $slug;
        $count = 1;
        while (Author::withTrashed()->where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        // Check if the final slug matches reserved words or routes
        $reservedWords = ['create', 'edit', 'update', 'delete', 'show']; // Add more if needed
        $reservedRoutes = ['login', 'register', 'admin']; // Add more if needed
        if (in_array($slug, $reservedWords) || in_array($slug, $reservedRoutes)) {
            $slug .= '-'.$count; // Append count to handle reserved words/routes
        }

        // Check if the final slug is too long
        if (strlen($slug) > 255) {
            $slug = substr($slug, 0, 255); // Trim slug if it's too long
        }

        return $slug;
    }
    public function posts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Post::class);
    }
}
