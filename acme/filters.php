<?php

App::error(function (Exception $exception) {

  $isCurl      = str_contains(Request::server("HTTP_USER_AGENT"), "curl");
  $shouldDebug = (bool) Config::get("app.debug");

  if ($isCurl and $shouldDebug) {
    return $exception;
  }

  Log::error($exception);

});

App::after(function ($request, $response) {

  $response->headers->set("Access-Control-Allow-Origin", "*");
  $response->headers->set("Access-Control-Allow-Methods", "OPTIONS, GET, POST, PUT, DELETE, OPTIONS");
  $response->headers->set("Access-Control-Allow-Headers", "Accept, Accept-Language, Content-Language, Content-Type, X-Requested-With");

  return $response;

});
