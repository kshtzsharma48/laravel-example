<?php

namespace Acme\Repository\EloquentRepository\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentEloquentRepositoryModel extends EloquentRepositoryModel
{

  /**
   * @var string
   */
  protected $table = "comments";

  /**
   * @var array
   */
  protected $fillable = [
    "content",
    "post_id"
  ];

  /**
   * @return BelongsTo
   */
  public function post()
  {
    return $this->belongsTo(PostEloquentRepositoryModel::class, "post_id");
  }

}
