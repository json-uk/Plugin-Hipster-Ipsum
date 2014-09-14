<?php
class Plugin_hipster_ipsum extends Plugin {

  var $meta = array(
    'name'       => 'Hipster Ipsum Generator',
    'version'    => '0.9',
    'author'     => 'Jason Chandler',
    'author_url' => 'https://github.com/dtigraphics/'
  );

  public function index()
  {
    $paragraphs       = $this->fetchParam('paragraphs', '4', 'is_numeric');
    $type             = $this->fetchParam('type', 'hipster-latin');
    $html             = $this->fetchParam('html', 'false');

    $request_url = "http://hipsterjesus.com/api/?type={$type}&paras={$paragraphs}&html={$html}";

    $json = json_decode(file_get_contents($request_url));

    $html = $json->text;

    return $html;

  }
}