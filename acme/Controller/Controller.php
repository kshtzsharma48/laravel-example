<?php

namespace Acme\Controller;

use Acme\Handler\Handler;
use Acme\Responder\HttpResponder;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

abstract class Controller extends BaseController implements HttpResponder
{

  /**
   * @var Handler
   */
  protected $handler;

  /**
   * @var Request
   */
  protected $request;

  /**
   * @var Response
   */
  protected $response;

  /**
   * @param Handler  $handler
   * @param Request  $request
   * @param Response $response
   *
   * @return Controller
   */
  public function __construct(Handler $handler, Request $request, Response $response)
  {
    $this->handler  = $handler;
    $this->request  = $request;
    $this->response = $response;
  }

  /**
   * @param array $data
   *
   * @return JsonResponse
   */
  public function respondsWithOk(array $data)
  {
    return $this->response->json([
        "status" => "ok"
      ] + $data, 200);
  }

  /**
   * @param array $errors
   *
   * @return JsonResponse
   */
  public function respondsWithError(array $errors)
  {
    return $this->response->json([
        "status" => "error"
      ] + $errors, 400);
  }

  /**
   * @return JsonResponse
   */
  public function add()
  {
    return $this->handler->add($this, Input::all());
  }

  /**
   * @param int $id
   *
   * @return JsonResponse
   */
  public function edit($id)
  {
    return $this->handler->edit($this, Input::all() + compact("id"));
  }

  /**
   * @param int $id
   *
   * @return JsonResponse
   */
  public function delete($id)
  {
    return $this->handler->delete($this, Input::all() + compact("id"));
  }

  /**
   * @param int $id
   *
   * @return JsonResponse
   */
  public function show($id)
  {
    return $this->handler->show($this, Input::all() + compact("id"));
  }

  /**
   * @return JsonResponse
   */
  public function search()
  {
    return $this->handler->search($this, Input::all());
  }
}
