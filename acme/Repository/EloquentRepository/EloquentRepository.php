<?php

namespace Acme\Repository\EloquentRepository;

use Acme\Repository\EloquentRepository\Model\EloquentModel;

class EloquentRepository
{

  /**
   * @var EloquentModel
   */
  protected $model;

  /**
   * @param EloquentModel $model
   */
  public function __construct(EloquentModel $model)
  {
    $this->model = $model;
  }

  /**
   * @param array $data
   *
   * @return string
   */
  public function add(array $data)
  {
    return $this->model->create($data)->toArray();
  }

  /**
   * @param array $data
   *
   * @return string
   */
  public function edit(array $data)
  {
    $model = $this->model->find($data["id"]);
    $model->update($data);

    return $model->toArray();
  }

  /**
   * @param array $data
   *
   * @return string
   */
  public function delete(array $data)
  {
    $model = $this->model->find($data["id"]);
    $array = $model->toArray();

    $model->delete();

    return $array;
  }

  /**
   * @param array $data
   *
   * @return string
   */
  public function show(array $data)
  {
    return $this->model->find($data["id"])->toArray();
  }

  /**
   * @param array $data
   *
   * @return mixed
   */
  public function search(array $data)
  {
    return $this->model->get()->toArray();
  }
}
