<?php

class App
{
  // Controller & method & parameter default
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseURL();

    // controller
    if ( file_exists('../app/controllers/' . ucfirst($url[0]) . '.php') ) {
      $this->controller = ucfirst($url[0]);
      unset($url[0]);
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;


    // Method
    if ( isset($url[1]) ) {
      if ( method_exists($this->controller, $url[1]) ) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // Parameter
    if ( !empty($url) ) {
      $this->params = array_values($url);
    }

    // jalankan controller & method, serta kirimkan parameters
    call_user_func_array([$this->controller, $this->method], $this->params);

  }

  public function parseURL()
  {
    if( isset($_GET['url']) ) {
      $url = rtrim($_GET['url'], '/'); // menghapus '/' di akhir
      $url = filter_var($url, FILTER_SANITIZE_URL); // membersihkan url dari karakter2 aneh
      $url = explode('/', $url);
      return $url;
    }
  }
}
