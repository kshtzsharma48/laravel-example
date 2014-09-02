<?php

namespace Acme\Repository\EloquentRepository;

use Acme\Repository\EloquentRepository\Model\TagEloquentRepositoryModel;
use Acme\Repository\TagRepository;

class TagEloquentRepository extends EloquentRepository implements TagRepository
{
  /**
   * @param TagEloquentRepositoryModel $model
   */
  public function __construct(TagEloquentRepositoryModel $model)
  {
    $this->model = $model;
  }

}
