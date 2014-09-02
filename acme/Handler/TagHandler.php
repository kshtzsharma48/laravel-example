<?php

namespace Acme\Handler;

use Acme\Repository\TagRepository;
use Acme\Validator\Validator;

class TagHandler extends Handler
{
  /**
   * @param TagRepository $repository
   * @param Validator     $validator
   */
  public function __construct(TagRepository $repository, Validator $validator)
  {
    $this->repository = $repository;
    $this->validator  = $validator;
  }
}
