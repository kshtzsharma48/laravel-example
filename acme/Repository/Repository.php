<?php

namespace Acme\Repository;

interface Repository
{
  /**
   * @param array $criteria
   *
   * @return mixed
   */
  public function add(array $criteria);

  /**
   * @param array $criteria
   *
   * @return mixed
   */
  public function edit(array $criteria);

  /**
   * @param array $criteria
   *
   * @return mixed
   */
  public function delete(array $criteria);

  /**
   * @param array $criteria
   *
   * @return mixed
   */
  public function show(array $criteria);

  /**
   * @param array $criteria
   *
   * @return mixed
   */
  public function search(array $criteria);
}
