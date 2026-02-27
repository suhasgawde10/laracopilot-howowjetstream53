<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'category', 'description',
        'thumbnail', 'tags', 'publish_date', 'status', 'author'
    ];

    protected $casts = [
        'publish_date' => 'date'
    ];

    public function getTagsArrayAttribute()
    {
        if (!$this->tags) return [];
        return array_map('trim', explode(',', $this->tags));
    }

    public function getExcerptAttribute()
    {
        return \Illuminate\Support\Str::limit(strip_tags($this->description), 160);
    }

    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail) {
            return asset('storage/' . $this->thumbnail);
        }
        return asset('images/default-article.jpg');
    }
}