<?php

namespace Acme\Handler;

use Acme\Repository\PostRepository;
use Acme\Validator\Validator;

class PostHandler extends Handler
{
  /**
   * @param PostRepository $repository
   * @param Validator      $validator
   */
  public function __construct(PostRepository $repository, Validator $validator)
  {
    $this->repository = $repository;
    $this->validator  = $validator;
  }
}
