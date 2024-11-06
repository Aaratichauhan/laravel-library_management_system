<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function auther(): BelongsTo{
        return $this->belongsTo(Auther::class,'auther_id','id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class,'publisher_id','id');
    }


}
