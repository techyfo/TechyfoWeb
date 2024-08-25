<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory, SoftDeletes;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            $service->setSlug();
        });

        static::updating(function ($service) {
            $service->setSlug();
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
    public function testimonials(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Testimonial::class,'service_id');
    }
    public function company_lists(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CompanyList::class,'service_id');
    }
    public function faqs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Faq::class,'service_id');
    }
    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }
    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Service::class, 'parent_id');
    }
    public function price_plans(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PricePlan::class, 'service_id');
    }
}
