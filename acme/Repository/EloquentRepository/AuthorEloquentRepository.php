<?php

namespace Acme\Repository\EloquentRepository;

use Acme\Repository\AuthorRepository;
use Acme\Repository\EloquentRepository\Model\AuthorEloquentRepositoryModel;

class AuthorEloquentRepository extends EloquentRepository implements AuthorRepository
{
  /**
   * @param AuthorEloquentRepositoryModel $model
   */
  public function __construct(AuthorEloquentRepositoryModel $model)
  {
    $this->model = $model;
  }

}
