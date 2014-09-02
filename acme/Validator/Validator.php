<?php

namespace Acme\Validator;

interface Validator
{
  /**
   * @param array $rules
   *
   * @return Validator
   */
  public function setRules(array $rules);

  /**
   * @param array $data
   *
   * @return Validator
   */
  public function setData(array $data);

  /**
   * @return bool
   */
  public function isValid();

  /**
   * @return array
   */
  public function getErrors();
}
