<?php

namespace Acme\Controller;

use Acme\Handler\AuthorHandler;
use Acme\Responder\HttpResponder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class AuthorController extends Controller implements HttpResponder
{
  /**
   * @param AuthorHandler $handler
   * @param Request       $request
   * @param Response      $response
   */
  public function __construct(AuthorHandler $handler, Request $request, Response $response)
  {
    $this->handler  = $handler;
    $this->request  = $request;
    $this->response = $response;
  }
}
