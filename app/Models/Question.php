<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category; 
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'subject',
        'text',
        'user_id',
        'category_id',
    ];

public function user(): BelongsTo{

    return $this->belongsTo(User::class);

}

public function category(): BelongsTo{   

    return $this->belongsTo(Category::class);

}

public function reply(): HasMany
    {
        return $this->hasMany(ReplyQuestion::class);
    }

}