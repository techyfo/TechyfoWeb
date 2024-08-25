<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class PortfolioCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($portfolio) {
            $portfolio->setSlug();
        });

        static::updating(function ($portfolio) {
            $portfolio->setSlug();
        });
    }

    // Set the slug based on name or input slug
    protected function setSlug()
    {
        if ($this->isDirty('name')) {
            $this->slug = Str::slug($this->name);
        } elseif (empty($this->slug)) {
            $this->slug = Str::slug($this->name);
        }
        $this->ensureUniqueSlug();
    }

    // Ensure the generated slug is unique
    protected function ensureUniqueSlug()
    {
        $originalSlug = $this->slug;
        $i = 1;

        while (static::where('slug', $this->slug)->where('id', '!=', $this->id)->exists()) {
            $this->slug = $originalSlug . '-' . $i++;
        }
    }
    public function portfolios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Portfolio::class);
    }
}
