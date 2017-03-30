<?php

class RegistrosController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  var $qtdexam = 0;
  var $qtdvalor = 0;
  var $eventos;

  public function solicita_registro(){
    $this->set('eventos', $this->Registro->Evento->find('all', array('order' => array('Evento.data ASC'))));
  }

  public function registros_solicitados() {
    $id = $this->Session->read('Atleta');

    $this->set('registros', $this->Registro->find('all',
    array('conditions'=> array('Atleta.id' => $id[0]['Atleta']['id']), 'order' => array('Registro.data DESC','Evento.data ASC' )),
    array('recursive' => 2)));
  }

  public function salva_solicitacao($id){
    $codpaci = $this->Session->read('Atleta');

      if (empty($this->request->data)) {
        $eventos = $this->Registro->Evento->findById($id);
        $this->set('evento', $eventos);
      }
      else{
        $this->request->data['Registro']['evento_id'] = $id;
        $this->request->data['Registro']['atleta_id'] = $codpaci[0]['Atleta']['id'] ;

        if ($this->Registro->save($this->request->data)) {
        $this->Flash->set('Registro gravado com Sucesso !');
        $this->redirect(array('action' => 'registros_solicitados'));
        }
      }

  }
  public function lista_registros(){
    $this->set('registros', $this->Registro->find('all', array('order' => array('Registro.data DESC'), array('recursive' => 2))));
  }


  public function crud_registros(){
      $this->set('registros', $this->Registro->find('all', array('order' => array('Registro.data DESC'), array('recursive' => 2))));
  }

  public function altera_registros($id){
    if (empty($this->request->data)) {
      $this->set('registros', $this->Registro->find('all', array('conditions'=> array('Registro.id' => $id))));
    }else {
      $this->request->data['Registro']['id'] = $id;
          if ($this->Registro->save($this->request->data)) {
              $this->Flash->set('Registro editado com sucesso !!!');
              $this->set('registros', $this->Registro->find('all', array('conditions'=> array('Registro.id' => $id))));
            }
      }
    }
    public function delet($id){
      $this->Registro->delete($id);

      $this->Flash->set('Registro excluído com Sucesso !');
      $this->redirect(array('action' => 'crud_registros'));

    }

}
?>
