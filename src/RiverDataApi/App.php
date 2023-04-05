<?php

namespace RiverDataApi;

use Symfony\Component\HttpFoundation\Request;

class App {
  public function bootstrap() {
    $request = Request::createFromGlobals();
    echo(htmlspecialchars($request->getPathInfo()));
  }
}
