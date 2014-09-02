<?php

namespace Acme\Repository\EloquentRepository\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostEloquentRepositoryModel extends EloquentRepositoryModel
{

  /**
   * @var string
   */
  protected $table = "posts";

  /**
   * @var array
   */
  protected $fillable = [
    "title",
    "content",
    "author_id"
  ];

  /**
   * @return BelongsTo
   */
  public function author()
  {
    return $this->belongsTo(AuthorEloquentRepositoryModel::class, "author_id");
  }

  /**
   * @return HasMany
   */
  public function comments()
  {
    return $this->hasMany(CommentEloquentRepositoryModel::class, "post_id");
  }

  /**
   * @return BelongsToMany
   */
  public function tags()
  {
    return $this
      ->belongsToMany(TagEloquentRepositoryModel::class, "posts_tags", "post_id", "tag_id")
      ->withTimestamps();
  }

}
