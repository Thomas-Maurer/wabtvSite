<?php
/**
 * Created by PhpStorm.
 * User: Wellan
 * Date: 08/05/2016
 * Time: 16:30
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Filesystem\File;

class TimelineController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function index () {
      $file = new File(APP . "data" . DS . "prog.json");
      $programmation = $file->read(true, 'r');
    }
    public function controlPanel () {
        $file = new File(APP . "data" . DS . "prog.json");
        $programmation = $file->read(true, 'r');

    }

    public function updateProg() {
        $file = new File(APP . "data" . DS . "prog.json");

        $programmation = json_encode($this->request->input('json_decode'), JSON_PRETTY_PRINT);

        $file->write($programmation);
        $file->close();
        $this->autoRender = false;
        $this->response->type('json');

        $this->response->body('{"success": true}');

    }
}
