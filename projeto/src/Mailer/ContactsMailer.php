<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Contacts mailer.
 */
class ContactsMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Contacts';

    public function sacMail($request, $emailFrom, $emailTo){

    	$this->from($emailFrom)
    		->to($emailTo)
            ->profile('qtx')
            ->emailFormat('html')
        	->template('email')
            ->layout('sac/send')
            ->viewVars(['request' => $request])
            ->subject('Mensagem recebida via SAC - site qualitex de: ' . $request['name']);

    } 

    public function ombudsmanMail($request, $emailFrom, $emailTo){

    	$this->from($emailFrom)
    		->to($emailTo)
            ->profile('qtx')
            ->emailFormat('html')
        	->template('email')
            ->layout('ombudsman/send')
            ->viewVars(['request' => $request])
            ->subject('Mensagem recebida via Ouvidoria - site qualitex');	
    }

    public function workHereMail($request, $emailFrom, $emailTo){

        $this->from($emailFrom)
            ->to($emailTo)
            ->profile('qtx')
            ->emailFormat('html')
            ->template('email')
            ->layout('workHere/send')
            ->viewVars(['request' => $request])
            ->attachments([
                $request['file']['name'] => [
                    'file' => $request['file']['tmp_name'],
                    'mimetype' => $request['file']['type'],
                    'contentId' => $request['file']['tmp_name']
                ]
            ])
            ->subject('Currículo via site qualitex - Candidato: ' . $request['name'] . ' Vaga: ' . $request['vacancy'] .' Estado: '. $request['state'] . ' PCD: ' . $request['pcd']);   
    }

}
