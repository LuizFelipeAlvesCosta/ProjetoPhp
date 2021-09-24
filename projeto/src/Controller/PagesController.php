<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Controller\Component\FlashComponent;


class PagesController extends AppController{
    
    public function display(){

        $connection = ConnectionManager::get('postgres');

         $sql = "SELECT * FROM eventos
                INNER JOIN tipoevento ON tipoevento.id
                = eventos.id_evento";
         $TipEvento = $connection->execute($sql)->fetchAll('assoc');

         $sql = "SELECT COUNT(id) AS QTD FROM eventos
                 WHERE situacao = 'Pendente'";
         $Evento = $connection->execute($sql)->fetchAll('assoc');

         $this->set(compact('TipEvento','Evento'));
         $this->set('_serialize',['TipEvento','Evento']);
    }

}
?>