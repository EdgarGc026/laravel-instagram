<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model {
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'user_id',
    'description',
    'post_image',
  ];


  /**
   * @return BelongsTo
   */
  public function user(): BelongsTo {
    return $this->belongsTo( User::class );
  }

  /**
   * @return HasMany
   */
  public function comments(): HasMany {
    return $this->hasMany( Comment::class );
  }

  /**
   * @return HasMany
   */
  public function likes(): HasMany {
    return $this->hasMany( Like::class );
  }


}
