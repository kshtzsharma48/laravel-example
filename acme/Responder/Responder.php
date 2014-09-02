<?php

namespace Acme\Responder;

interface Responder
{
  /**
   * @param array $data
   *
   * @return mixed
   */
  public function respondsWithOk(array $data);

  /**
   * @param array $data
   *
   * @return mixed
   */
  public function respondsWithError(array $data);
}
