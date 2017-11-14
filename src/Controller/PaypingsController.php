<?php
namespace App\Controller;

use App\Controller\AppController;

/**
* Paypings Controller
*
*
* @method \App\Model\Entity\Payping[] paginate($object = null, array $settings = [])
*/
class PaypingsController extends AppController
{

    /**
    * Index method
    *
    * @return \Cake\Http\Response|void
    */
    public function index()
    {



        if (!$this->request->is(['patch', 'post', 'put'])) {
            $this->response->body('My Body');

        }
        else {

            $jsonData = $this->request->input('json_decode');
            $this->loadModel('Paypings');
            $Payping = $this->Paypings->newEntity();
            $Payping->meta = $jsonData->Body;
        	$this->Paypings->save($Payping);
			 $this->response->body('ok');
        }

        return $this->response;
    }






}
