<?php
namespace App\Controller;

use Cake\Core\Configure;
//use Cake\Network\Exception\NotFoundException;
//use Cake\View\Exception\MissingTemplateException;

class SearchController extends AppController {
	function index() {
		$this->render('top');
	}
	function result($pid = null) {
		//var_dump($this->request->data['text']);
		$pid = $this->request->data['text'];
		$this->set('pid', $pid);
		//$this->redirect(array('action' => 'result', $pid));
		$this->render('result');
	}
	
}