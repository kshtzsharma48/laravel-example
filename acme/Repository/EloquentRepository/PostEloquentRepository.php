<?php

namespace Acme\Repository\EloquentRepository;

use Acme\Repository\EloquentRepository\Model\PostEloquentRepositoryModel;
use Acme\Repository\PostRepository;

class PostEloquentRepository extends EloquentRepository implements PostRepository
{
  /**
   * @param PostEloquentRepositoryModel $model
   */
  public function __construct(PostEloquentRepositoryModel $model)
  {
    $this->model = $model;
  }

}
