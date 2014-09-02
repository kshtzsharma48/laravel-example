<?php

namespace Acme\Controller;

use Acme\Handler\TagHandler;
use Acme\Responder\HttpResponder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class TagController extends Controller implements HttpResponder
{
  /**
   * @param TagHandler $handler
   * @param Request    $request
   * @param Response   $response
   */
  public function __construct(TagHandler $handler, Request $request, Response $response)
  {
    $this->handler  = $handler;
    $this->request  = $request;
    $this->response = $response;
  }
}
