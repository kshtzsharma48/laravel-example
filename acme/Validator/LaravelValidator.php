<?php

namespace Acme\Validator;

use Illuminate\Support\Facades\Validator as BaseValidator;

class LaravelValidator implements Validator
{

  /**
   * @var BaseValidator
   */
  protected $validator;

  /**
   * @return LaravelValidator
   */
  public function __construct()
  {
    $this->validator = BaseValidator::make([], []);
  }

  /**
   * @param array $rules
   *
   * @return Validator
   */
  public function setRules(array $rules)
  {
    $this->validator->setRules($rules);
    return $this;
  }

  /**
   * @param array $data
   *
   * @return Validator
   */
  public function setData(array $data)
  {
    $this->validator->setData($data);
    return $this;
  }

  /**
   * @return bool
   */
  public function isValid()
  {
    return $this->validator->passes();
  }

  /**
   * @return array
   */
  public function getErrors()
  {
    return $this->validator->errors;
  }
}
