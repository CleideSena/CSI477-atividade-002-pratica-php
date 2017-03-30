<?php

class EventosController extends AppController {

  public $helpers = array('Html');

  public function index() {
    $this->set('eventos', $this->Evento->find('all', array('order' => array('Evento.data ASC'))));
  }

  public function crud_eventos(){
    $this->set('eventos', $this->Evento->find('all', array('order' => array('Evento.id ASC'))));
  }

  public function cadastro(){

    if($this->Evento->find('all', array('conditions'=> array('Evento.nome' => $this->request->data['Evento']['nome'], 'Evento.preco' => $this->request->data['Evento']['preco'])))){
      $this->Flash->set('Evento já existe !!!');
      $this->redirect(array('action' => 'crud_eventos'));
    }else{
      if ($this->Evento->save($this->request->data)) {
          $this->Flash->set('Evento cadastrado com sucesso !!!');
          $this->redirect(array('action' => 'crud_eventos'));
      }
    }
  }


  public function altera_evento($id){
    if (empty($this->request->data)) {
      $this->set('eventos', $this->Evento->find('all', array('conditions'=> array('Evento.id' => $id))));
    }else {
      $this->request->data['Evento']['id'] = $id;

        if($this->Evento->find('all', array('conditions'=> array('Evento.nome' => $this->request->data['Evento']['nome'], 'Evento.preco' => $this->request->data['Evento']['preco'])))){
          echo "<script language='javascript'>window.alert('Evento já existe !!!')</script>";
          $this->set('eventos', $this->Evento->find('all', array('conditions'=> array('Evento.id' => $id))));
        }else{
        
          if ($this->Evento->save($this->request->data)) {
              $this->Flash->set('Evento editado com sucesso !!!');
              $this->set('eventos', $this->Evento->find('all', array('conditions'=> array('Evento.id' => $id))));
            }
        }
    }
  }

  public function delet($id){
    $this->Evento->delete($id);

    $this->Flash->set('Evento excluído com Sucesso !');
    $this->redirect(array('action' => 'crud_eventos'));

  }
}
?>
