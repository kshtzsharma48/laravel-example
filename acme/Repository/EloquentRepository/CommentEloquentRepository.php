<?php

namespace Acme\Repository\EloquentRepository;

use Acme\Repository\CommentRepository;
use Acme\Repository\EloquentRepository\Model\EloquCommentEloquentRepositoryModelentModel;

class CommentEloquentRepository extends EloquentRepository implements CommentRepository
{
  /**
   * @param CommentEloquentRepositoryModel $model
   */
  public function __construct(CommentEloquentRepositoryModel $model)
  {
    $this->model = $model;
  }

}
