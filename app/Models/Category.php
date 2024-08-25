<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $slug = Str::slug($model->name);
            $originalSlug = $slug;
            $count = 1;

            while (static::withTrashed()->where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $model->slug = $slug;
        });

        static::updating(function ($model) {
            $slug = Str::slug($model->slug);
            $originalSlug = $slug;
            $count = 1;

            while (static::withTrashed()->where('slug', $slug)->where('id', '!=', $model->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $model->slug = $slug;
        });
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
