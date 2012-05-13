<?php
class NoticiasController extends AppController {
    var $scaffold;

	public function add() {
        if ($this->request->is('post')) {
            $this->Noticia->create();
            if ($this->Noticia->save($this->request->data)) {                
                $this->redirect(array('action' => 'index'));
            }
        }
    }    	
}
?>