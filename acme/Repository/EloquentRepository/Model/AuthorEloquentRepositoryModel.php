<?php

namespace Acme\Repository\EloquentRepository\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class AuthorEloquentRepositoryModel extends EloquentRepositoryModel
{

  /**
   * @var string
   */
  protected $table = "authors";

  /**
   * @var array
   */
  protected $fillable = [
    "name"
  ];

  /**
   * @return HasMany
   */
  public function posts()
  {
    return $this->hasMany(PostEloquentRepositoryModel::class, "author_id");
  }

}
