<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    protected $fillable = [
        'title',
        'is_active'
    ];

    /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * Gives the categories that are active
     * @param $query
     * @return mixed
     */
    public function scopeIsActiveFilter($query): mixed
    {
        return $query->where('is_active', 1);
    }
}
