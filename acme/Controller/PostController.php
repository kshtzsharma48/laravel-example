<?php

namespace Acme\Controller;

use Acme\Handler\PostHandler;
use Acme\Responder\HttpResponder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class PostController extends Controller implements HttpResponder
{
  /**
   * @param PostHandler $handler
   * @param Request     $request
   * @param Response    $response
   */
  public function __construct(PostHandler $handler, Request $request, Response $response)
  {
    $this->handler  = $handler;
    $this->request  = $request;
    $this->response = $response;
  }
}
