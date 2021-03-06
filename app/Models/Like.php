<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model {
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'user_id',
    'post_id',
  ];

  /**
   * @return BelongsTo
   */
  public function user(): BelongsTo {
    return $this->belongsTo( User::class );
  }

  /**
   * @return BelongsTo
   */
  public function post(): BelongsTo {
    return $this->belongsTo( Post::class );
  }
}
