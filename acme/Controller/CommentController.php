<?php

namespace Acme\Controller;

use Acme\Handler\CommentHandler;
use Acme\Responder\HttpResponder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class CommentController extends Controller implements HttpResponder
{
  /**
   * @param CommentHandler $handler
   * @param Request        $request
   * @param Response       $response
   */
  public function __construct(CommentHandler $handler, Request $request, Response $response)
  {
    $this->handler  = $handler;
    $this->request  = $request;
    $this->response = $response;
  }
}
