<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'movie_name',
        'movie_desc',
        'release_date',
        'category_id',
        'like_count',
        'is_popular',
        'rating',
        'screen_time',
        'parental_guide_id',
        'director_id'
    ];

    protected $casts = [
        'is_popular' => 'boolean',
    ];

    /**
     * Get the parentalGuide that owns the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentalGuide()
    {
        return $this->belongsTo(ParentalGuide::class);
    }

    /**
     * Get the category that owns the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsToMany(MovieCategory::class, 'category_movie', 'movie_id', 'category_id')
            ->withTimestamps();
    }

    /**
     * Get all of the watchlis Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function watchlist()
    {
        return $this->hasMany(Watchlist::class);
    }

    /**
     * Get the image that owns the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function images()
    {
        return $this->hasMany(MovieImage::class);
    }

    /**
     * Get the director that owns the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function director()
    {
        return $this->belongsTo(Director::class);
    }
}
