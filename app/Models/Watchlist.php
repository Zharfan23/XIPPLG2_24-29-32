<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $fillable = [
        'watchlist_id',
        'user_id',
        'is_watched',
    ];

    protected $casts = [
        'is_watched' => 'boolean',
    ];

    /**s
     * Get the user that owns the Watchlist
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}