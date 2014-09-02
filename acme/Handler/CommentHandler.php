<?php

namespace Acme\Handler;

use Acme\Repository\CommentRepository;
use Acme\Validator\Validator;

class CommentHandler extends Handler
{
  /**
   * @param CommentRepository $repository
   * @param Validator         $validator
   */
  public function __construct(CommentRepository $repository, Validator $validator)
  {
    $this->repository = $repository;
    $this->validator  = $validator;
  }
}
