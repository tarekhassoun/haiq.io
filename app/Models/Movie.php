<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = [
        'title',
        'original_title',
        'slug',
        'overview',
        'release_date',
        'language',
        'tmdb_id',
        'tmdb_popularity',
    ];

    protected $casts = [
        'tmdb_id' => 'integer',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model)
        {
            $model->slug = str_slug($model->title . " " . $model->id);
        });
    }

    public function releaseDates()
    {
        return $this->hasMany(ReleaseDate::class);
    }

    public function images()
    {
        return $this->hasMany(MovieImage::class);
    }

    public function genres()
    {
        return $this->hasMany(Genre::class);
    }

    public function people()
    {
        return $this->hasMany(Person::class);
    }
}
