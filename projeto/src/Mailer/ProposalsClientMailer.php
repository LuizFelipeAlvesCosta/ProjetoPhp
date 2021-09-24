<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Proposals mailer.
 */
class ProposalsMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'ProposalsClient';

     public function requestProposalMail($request, $emailFrom, $emailTo){

            $this->from($emailFrom)
            ->to($emailTo)
            ->addTo($emailFrom)
            ->profile('qtx')
            ->emailFormat('html')
            ->template('email')
            ->layout('proposals/send')
            ->viewVars(['request' => $request])
            ->attachments([
                $request['file']['name'] => [
                    'file' => $request['file']['tmp_name'],
                    'mimetype' => $request['file']['type'],
                    'contentId' => $request['file']['tmp_name']
                ]
            ])
            ->subject('Sua solicitação foi recebida com sucesso! ');

    } 

}