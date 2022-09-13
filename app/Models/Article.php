<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    protected $fillable = ['category_id', 'status_id','user_id', 'title', 'description'];

    /**
     * @var string
     */
    protected $table = 'articles';

    /**
     * @return BelongsTo
     */
    public function categoryRelation(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * @return BelongsTo
     */
    public function statusRelation(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    /**
     * @return BelongsTo
     */
    public function userRelation(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
