<?php

class ClientesController extends AppController{

    public $helpers = array('Html', 'Form');
    public $components = array('Flash', 'Session');

    public function index(){
        $this->redirect(array('action' => 'login'));
    }

    

    public function view($id){
        if(!$id){
            $this->Flash->error(__('Cliente não foi encontrado!'));
        }
        $cliente = $this->Cliente->findById($id);
        $this->set('clientes', $cliente);
    }


    public function add(){
        if($this->request->is('post')){
            $this->Cliente->create();
            if($this->Cliente->save($this->request->data)){
                $this->Flash->success(__('Cadastro realizado com sucesso! Efetue login!'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Cadastro não realizado!'));
        }
    }




    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Cliente inválido'));
        }
        $cliente = $this->Cliente->findById($id);
        if(!$cliente){
            throw new NotFoundException(__('Cliente inválido'));
        }
        if($this->request->is(array('post','put'))){
            $this->Cliente->id = $id;
            if($this->Cliente->save($this->request->data)){
                $this->Flash->success(__('Os dados pessoais foram alterados com sucesso! Efetue o login!'));
                $clienteInfo = $this->request->data;
                $this->Session->write('Cliente',array(
                    'id' => $clienteInfo['Cliente']['id'],
                    'login' => $clienteInfo['Cliente']['login'],
                    'nome' => $clienteInfo['Cliente']['nome']
                ));
                return $this->redirect(array(
                    'action' => 'login',
                    $this->Session->read('Cliente.id')
                ));
            }
            $this->Flash->error(__('Os dados pessoais não foram alterados!'));
         }
         if(!$this->request->data){
             $this->request->data = $cliente;
         }
    }

    public function delete($id = null){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        if($this->Cliente->delete($id)){
            $this->Flash->success(__('Cliente %s foi excluído com sucesso!', h($id)));
            return $this->redirect(array('action' => 'index'));
        }else{
            $this->Flash->error(__('Cliente %s não foi excluído!', h($id)));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function validar(){
        $cliente = $this->Cliente->findAllByLoginAndSenha($this->data['Cliente']['login'],
        ($this->data['Cliente']['senha']));
        if(!empty($cliente)){
            return $cliente;
        }else{
            return false;
        }
    }

    public function area_do_cliente(){}
    public function area_administrativa(){}

    public function login(){
        if(!empty($this->data['Cliente']['login'])){

            $cliente = $this->validar();
            if($cliente != false){
                $this->Flash->set('Acesso efetuado com sucesso!');
                $clienteInfo = $this->Cliente->findByLogin($this->data['Cliente']['login']);
                $this->Session->delete('Usuario');
                $this->Session->write('Cliente',array(
                    'id' => $clienteInfo['Cliente']['id'],
                    'login' => $clienteInfo['Cliente']['login'],
                    'nome' => $clienteInfo['Cliente']['nome'],
                    'shopping_carrinho' => []
                ));


                $this->redirect(array(
                    'controller' => 'clientes',
                    'action' => 'area_do_cliente'
                ));
                exit();
            }else{
                $this->Flash->set('Usuário e/ou senha inválidos!');
                $this->redirect(array('action' => 'login'));
                exit();

            }
        }
    }

    public function logout(){
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas com sucesso!');
        $this->redirect(array(
                  'controller' => 'pages',
                  'action' => 'display'
                ));
        exit();
    }
}
?>
