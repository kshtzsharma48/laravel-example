<?php

namespace Acme\Handler;

use Acme\Repository\Repository;
use Acme\Responder\Responder;
use Acme\Validator\Validator;
use Illuminate\Http\JsonResponse;

abstract class Handler
{

  /**
   * @var Repository
   */
  protected $repository;

  /**
   * @var array
   */
  protected $methods = [
    "add",
    "edit",
    "delete",
    "show",
    "search"
  ];

  /**
   * @param Repository $repository
   * @param Validator  $validator
   *
   * @return Handler
   */
  public function __construct(Repository $repository, Validator $validator)
  {
    $this->repository = $repository;
    $this->validator  = $validator;
  }

  /**
   * @param Responder $responder
   * @param array     $data
   *
   * @return JsonResponse
   */
  public function add(Responder $responder, array $data)
  {
    return $this->handle($responder, "add", $this->getRulesForAdd(), $data);
  }

  /**
   * @param Responder $responder
   * @param string    $method
   * @param array     $rules
   * @param array     $data
   *
   * @return JsonResponse
   */
  protected function handle(Responder $responder, $method, array $rules, array $data)
  {
    $this->validator->setRules($rules);
    $this->validator->setData($data);

    if ($this->validator->isValid()) {
      $result = $this->dispatchToRepository($method, $data);

      if ($result === null) {
        return $responder->respondsWithError(["errors" => "{$method} failed"]);
      }

      return $responder->respondsWithOk(["data" => $result]);
    }

    return $responder->respondsWithError(["errors" => $this->validator->getErrors()]);
  }

  /**
   * @param string $method
   * @param array  $data
   *
   * @return mixed
   */
  protected function dispatchToRepository($method, array $data)
  {
    if (in_array($method, $this->methods)) {
      return $this->repository->$method($data);
    }
  }

  /**
   * @return array
   */
  protected function getRulesForAdd()
  {
    return [];
  }

  /**
   * @param Responder $responder
   * @param array     $data
   *
   * @return JsonResponse
   */
  public function edit(Responder $responder, array $data)
  {
    return $this->handle($responder, "edit", $this->getRulesForEdit(), $data);
  }

  /**
   * @return array
   */
  protected function getRulesForEdit()
  {
    return [];
  }

  /**
   * @param Responder $responder
   * @param array     $data
   *
   * @return JsonResponse
   */
  public function delete(Responder $responder, array $data)
  {
    return $this->handle($responder, "delete", $this->getRulesForDelete(), $data);
  }

  /**
   * @return array
   */
  protected function getRulesForDelete()
  {
    return [];
  }

  /**
   * @param Responder $responder
   * @param array     $data
   *
   * @return JsonResponse
   */
  public function show(Responder $responder, array $data)
  {
    return $this->handle($responder, "show", $this->getRulesForShow(), $data);
  }

  /**
   * @return array
   */
  protected function getRulesForShow()
  {
    return [];
  }

  /**
   * @param Responder $responder
   * @param array     $data
   *
   * @return JsonResponse
   */
  public function search(Responder $responder, array $data)
  {
    return $this->handle($responder, "search", $this->getRulesForSearch(), $data);
  }

  /**
   * @return array
   */
  protected function getRulesForSearch()
  {
    return [];
  }
}
