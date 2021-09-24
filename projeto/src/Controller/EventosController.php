<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Controller\Component\FlashComponent;


class EventosController extends AppController{
    
    /////////// TIPO DO EVENTO ///////////////
    public function tipoevento(){

        $connection = ConnectionManager::get('postgres');

        $sql = "SELECT * FROM tipoevento";
        $TipEvento = $connection->execute($sql)->fetchAll('assoc');

        $this->set(compact('TipEvento'));
        $this->set('_serialize',['TipEvento']);
    } 

    public function addtipoevento(){}

    public function insertipoevento(){

        $connection = ConnectionManager::get('postgres');

        $sql = "SELECT * FROM tipoevento";
        $TipEvento = $connection->execute($sql)->fetchAll('assoc');

        $id = '';$max = '';
        foreach ($TipEvento as $value) {
                $id = $value['id'];
        }

        if (($id == '') or ($id == null) or ($id == '0')){
                $max = '1';
        }else{
                $max = $id + 1;
        }

        $sql = " INSERT INTO tipoevento
                 (id,tipo_evento,cor)
                 VALUES
                 ('$max',
                  '{$this->request['data']['event']}',
                  '{$this->request['data']['color']}')";
        $connection->execute($sql);  

        return $this->redirect(['action' => 'tipoevento']);

        $this->set(compact('TipEvento'));
        $this->set('_serialize',['TipEvento']);
    }

    public function editipoevento($id){

        $connection = ConnectionManager::get('postgres');

        $sql = "SELECT * FROM tipoevento
                WHERE id = '$id'";
        $TipEvento = $connection->execute($sql)->fetchAll('assoc');

        $this->set(compact('TipEvento','id'));
        $this->set('_serialize',['TipEvento','id']);
    }

    public function updatetipoevento(){

        $connection = ConnectionManager::get('postgres');

        $id = $this->request->data['ids'];

        $sql = "UPDATE tipoevento
                set tipo_evento = '{$this->request['data']['event']}',
                    cor = '{$this->request['data']['color']}'
                where id = '$id'";
        $connection->execute($sql);

        return $this->redirect(['action' => 'tipoevento']);
    }

    public function deletetipoevento($id){

        $connection = ConnectionManager::get('postgres');

        $sql ="DELETE FROM tipoevento
               WHERE id = '$id'";
        $connection->execute($sql);

        return $this->redirect(['action' => 'tipoevento']);

        $this->set(compact('id'));
        $this->set('_serialize',['id']);
    }
    ////////////////////////////////////////

    ////////////// EVENTO /////////////////
    public function evento(){

        $connection = ConnectionManager::get('postgres');

        $sql = "SELECT * FROM eventos";
        $TipEvento = $connection->execute($sql)->fetchAll('assoc');

        $this->set(compact('TipEvento'));
        $this->set('_serialize',['TipEvento']);
    }

    public function addevento(){

        $connection = ConnectionManager::get('postgres');

        $sql = "SELECT * FROM tipoevento";
        $TipEvento = $connection->execute($sql)->fetchAll('assoc');

        $this->set(compact('TipEvento'));
        $this->set('_serialize',['TipEvento']);
    }

    public function insertevento(){

        $connection = ConnectionManager::get('postgres');

        $sql = "SELECT * FROM eventos";
        $TipEvento = $connection->execute($sql)->fetchAll('assoc');

        $id = '';$max = '';
        foreach ($TipEvento as $value) {
                $id = $value['id'];
        }

        if (($id == '') or ($id == null) or ($id == '0')){
                $max = '1';
        }else{
                $max = $id + 1;
        }

        $sql = " INSERT INTO eventos
                 (id,id_evento,data_inicio,data_fim,descricao,nome,situacao)
                 VALUES
                 ('$max',
                  '{$this->request['data']['tipevent']}',
                  '{$this->request['data']['dtin']}',
                  '{$this->request['data']['dtfm']}',
                  '{$this->request['data']['desc']}',
                  '{$this->request['data']['nome']}',
                  'Pendente')";
        $connection->execute($sql);

        $sql = " INSERT INTO eventos2
                 (id,id_evento,data_inicio,data_fim,descricao,nome,situacao)
                 VALUES
                 ('$max',
                  '{$this->request['data']['tipevent']}',
                  '{$this->request['data']['dtin']}',
                  '{$this->request['data']['dtfm']}',
                  '{$this->request['data']['desc']}',
                  '{$this->request['data']['nome']}',
                  'Pendente')";
        $connection->execute($sql);  

        return $this->redirect(['action' => 'evento']);

        $this->set(compact('TipEvento'));
        $this->set('_serialize',['evento']);
    }

    public function editevento($id){

        $connection = ConnectionManager::get('postgres');

        $sql = "SELECT * FROM tipoevento";
        $TipEvento = $connection->execute($sql)->fetchAll('assoc');

        $sql = "SELECT * FROM eventos
                WHERE id = '$id'";
        $Evento = $connection->execute($sql)->fetchAll('assoc');

        $this->set(compact('TipEvento','Evento','id'));
        $this->set('_serialize',['TipEvento','Evento','id']);
    }

    public function updatevento(){

        $connection = ConnectionManager::get('postgres');

        $id = $this->request->data['ids'];

        $sql = "UPDATE eventos
                set id_evento = '{$this->request['data']['tipevent']}',
                    data_inicio = '{$this->request['data']['dtin']}',
                    data_fim = '{$this->request['data']['dtfm']}',
                    descricao = '{$this->request['data']['desc']}',
                    nome = '{$this->request['data']['nome']}'
                where id = '$id'";
        $connection->execute($sql);

        $sql = "UPDATE eventos2
                set id_evento = '{$this->request['data']['tipevent']}',
                    data_inicio = '{$this->request['data']['dtin']}',
                    data_fim = '{$this->request['data']['dtfm']}',
                    descricao = '{$this->request['data']['desc']}',
                    nome = '{$this->request['data']['nome']}'
                where id = '$id'";
        $connection->execute($sql);

        return $this->redirect(['action' => 'evento']);
    }

    public function deletevento($id){

        $connection = ConnectionManager::get('postgres');

        $sql ="DELETE FROM eventos
               WHERE id = '$id'";
        $connection->execute($sql);

        $sql ="DELETE FROM eventos2
               WHERE id = '$id'";
        $connection->execute($sql);

        return $this->redirect(['action' => 'evento']);

        $this->set(compact('id'));
        $this->set('_serialize',['id']);
    }
    ///////////////////////////////////

    //////// CONSULTA EVENTOS PENDENTES ///////////
    public function periodpendentes(){}

    public function pendentes(){

         $connection = ConnectionManager::get('postgres');

         $Dtinicio = $this->request->data['dtin'];
         $Dtfim = $this->request->data['dtfm'];

         $sql = "SELECT * FROM eventos
                INNER JOIN tipoevento ON tipoevento.id
                = eventos.id_evento 
                WHERE eventos.situacao = 'Pendente'
                OR eventos.data_inicio = '$Dtinicio' 
                AND eventos.data_fim = '$Dtfim'";
         $TipEvento = $connection->execute($sql)->fetchAll('assoc');
         
         $this->set(compact('TipEvento'));
         $this->set('_serialize',['TipEvento']);
    }

    public function updatependentes($id){

        $connection = ConnectionManager::get('postgres');

        $sql = "UPDATE eventos
                set situacao = 'Concluido'
                where id = '$id'";
        $connection->execute($sql);

        $sql = "UPDATE eventos2
                set situacao = 'Concluido'
                where id = '$id'";
        $connection->execute($sql);

        return $this->redirect(['action' => 'periodpendentes']);

        $this->set(compact('id'));
        $this->set('_serialize',['id']);
    }   
    //////////////////////////////////////////////

    /////// CONSULTA EVENTOS CONCLUIDOS //////////
    public function periodconcluidos(){}

    public function concluidos(){

         $connection = ConnectionManager::get('postgres');

         $Dtinicio = $this->request->data['dtin'];
         $Dtfim = $this->request->data['dtfm'];

         $sql = "SELECT * FROM eventos
                INNER JOIN tipoevento ON tipoevento.id
                = eventos.id_evento
                INNER JOIN eventos2 ON eventos2.id_evento 
                = tipoevento.id
                WHERE eventos2.situacao = 'Concluido'
                OR eventos2.data_inicio = '$Dtinicio' 
                AND eventos2.data_fim = '$Dtfim'";
         $TipEvento = $connection->execute($sql)->fetchAll('assoc');
         
         $this->set(compact('TipEvento'));
         $this->set('_serialize',['TipEvento']);
    }
    /////////////////////////////////////////////

    /////// EXCLUIR LEMBRENTES /////////////////
    public function deletelembrete(){

         $connection = ConnectionManager::get('postgres');

         $sql = "SELECT * FROM eventos
                INNER JOIN tipoevento ON tipoevento.id
                = eventos.id_evento";
         $TipEvento = $connection->execute($sql)->fetchAll('assoc');
         
         $this->set(compact('TipEvento'));
         $this->set('_serialize',['TipEvento']);
    }

    public function updatelembrete($id){

        $connection = ConnectionManager::get('postgres');

        $date = date('Y/m/d');

        $sql = "UPDATE eventos2
                set situacao = 'Excluido',
                    data_exclusao = '$date'
                where id = '$id'";
        $connection->execute($sql);

        return $this->redirect(['action' => 'deltelembrete',$id]);

        $this->set(compact('id'));
        $this->set('_serialize',['id']);    
    }

    public function deltelembrete($id){

         $connection = ConnectionManager::get('postgres');

         $sql = "DELETE FROM eventos
                 WHERE id = '$id'";
         $connection->execute($sql);

         return $this->redirect(['action' => 'deletelembrete']);

         $this->set(compact('id'));
         $this->set('_serialize',['id']); 
    }
    //////////////////////////////////////////

    ////// LISTAR LEMBRETES EXCLUIDOS ////////
    public function listlembrexclud(){

         $connection = ConnectionManager::get('postgres');

         $sql = "SELECT * FROM eventos2
                INNER JOIN tipoevento ON tipoevento.id
                = eventos2.id_evento
                WHERE data_exclusao != ''";
         $TipEvento = $connection->execute($sql)->fetchAll('assoc');
         
         $this->set(compact('TipEvento'));
         $this->set('_serialize',['TipEvento']);
    }
    /////////////////////////////////////////
    
}
?>