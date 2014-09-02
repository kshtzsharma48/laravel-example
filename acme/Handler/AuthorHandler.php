<?php

namespace Acme\Handler;

use Acme\Repository\AuthorRepository;
use Acme\Validator\Validator;

class AuthorHandler extends Handler
{
  /**
   * @param AuthorRepository $repository
   * @param Validator        $validator
   */
  public function __construct(AuthorRepository $repository, Validator $validator)
  {
    $this->repository = $repository;
    $this->validator  = $validator;
  }
}
