<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Exception;

class ReservationController extends ReservationBaseController
{
  public $useTable = false;

  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Paginator');

    $this->loadModel('Users');
    $this->loadModel('Bookings');

    $this->set('authuser', $this->Auth->user());

    $this->viewBuilder()->setLayout('reservation');
  }

  public function index()
  {
    $reservations = $this->paginate('Bookings', [
      'conditions' => ['Bookings.user_id' => $this->Auth->user('id')],
      'order' => ['endtime'=>'desc'],
      'limit' => 3]);
    $this->set(compact('reservations'));
  }

  public function view($id = null)
  {
    $booking = $this->Bookings->get($id);
    $this->set(compact('booking'));
  }

  public function add()
  {
    $booking = $this->Bookings->newEntity();

    if($this->request->is('post')) {
      $booking = $this->Bookings->patchEntity($booking, $this->request->getData());

      if($this->Bookings->save($booking)) {
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('予約に失敗しました。もう一度入力してください。'));
    }
    $this->set(compact('booking'));
  }

  public function conf()
  {

  }

  public function newuser()
  {
    $newuser = $this->Users->newEntity();
    if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($newuser, $this->request->getData());
        if ($this->Users->save($newuser)) {
            return $this->redirect(['action' => 'login']);
        }
        $this->Flash->error(__('会員登録に失敗しました。'));
    }
    $this->set(compact('newuser'));
  }

  public function home()
  {

  }
}
