<?php
namespace App\Controller;
use Cake\Filesystem\File;

class ProgController extends AppController
{

  public function getprog() {
      $file = new File(APP . "data" . DS . "prog.json");
      $programmation = $file->read(true, 'r');
      $file->close();
      $this->autoRender = false;
      $this->response->type('json');

      $this->response->body($programmation);
  }

}
