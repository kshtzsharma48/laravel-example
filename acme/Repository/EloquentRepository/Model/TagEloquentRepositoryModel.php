<?php

namespace Acme\Repository\EloquentRepository\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TagEloquentRepositoryModel extends EloquentRepositoryModel
{

  /**
   * @var string
   */
  protected $table = "tags";

  /**
   * @var array
   */
  protected $fillable = [
    "name"
  ];

  /**
   * @return BelongsToMany
   */
  public function tags()
  {
    return $this
      ->belongsToMany(PostEloquentRepositoryModel::class, "posts_tags", "tag_id", "post_id")
      ->withTimestamps();
  }

}
