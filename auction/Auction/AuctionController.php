<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Exception;

class AuctionController extends AuctionBaseController
{
  public $useTable = false;

  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Paginator');

    $this->loadModel('Users');
    $this->loadModel('Products');
    $this->loadModel('Bidrequests');
    $this->loadModel('Bidinfo');
    $this->loadModel('Messages');

    $this->set('authuser', $this->Auth->user());

    $this->viewBuilder()->setLayout('auction');
  }

  public function index()
  {
    $auction = $this->paginate('Products', [
      'order' => ['endtime'=>'desc'],
      'limit' => 10]);
    $this->set(compact('auction'));
  }

  public function view($id = null)
  {
    $product = $this->Products->get($id, [
      'contain' => ['Users', 'Bidinfo', 'Bidinfo.Users']
    ]);

    if($product->endtime < new \Datetime('now') and $product->finished == 0) {
      $product->finished = 1;
      $this->Products->save($product);
      $bidinfo = $this->Bidinfo->newEntity();
      $bidinfo->product_id = $id;
      $bidrequest = $this->Bidrequests->find('all', [
        'conditions' => ['product_id' => $id],
        'contain' => ['Users'],
        'order' => ['price' => 'desc']])->first();

        if(!empty($bidrequest)){
          $bidinfo->user_id = $bidrequest->user->id;
          $bidinfo->user = $bidrequest->user;
          $bidinfo->price = $bidrequest->price;
          $this->Bidinfo->save($bidinfo);
        }
        $product->bidinfo = $bidinfo;
    }

    $bidrequests = $this->Bidrequests->find('all', [
      'conditions' => ['product_id' => $id],
      'contain' => ['Users'],
      'order' => ['price' => 'desc']])->toArray();

    $this->set(compact('product', 'bidrequests'));
  }

  public function add()
  {
    $product = $this->Products->newEntity();

    if($this->request->is('post')) {
      $product = $this->Products->patchEntity($product, $this->request->getData());

      if($this->Products->save($product)) {
        $this->Flash->success(__('保存しました。'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('保存に失敗しました。もう一度入力してください。'));
    }
    $this->set(compact('product'));
  }



  public function bid($product_id = null)
  {
    $bidrequest = $this->Bidrequests->newEntity();
    $bidrequest->product_id = $product_id;
    $bidrequest->user_id = $this->Auth->user('id');

    if($this->request->is('post')){
      $bidrequest = $this->Bidrequests->patchEntity($bidrequest, $this->request->getData());

      if($this->Bidrequests->save($bidrequest)){
        $this->Flash->success(__('入札を送信しました。'));
        return $this->redirect(['action' => 'view', $product_id]);
      }
      $this->Flash->error(__('入札に失敗しました。もう一度入力してください。'));
    }
    $product = $this->Products->get($product_id);
    $this->set(compact('bidrequest', 'product'));
  }

  public function msg($bidinfo_id = null)
  {
    $bidmsg = $this->Messages->newEntity();

    if($this->request->is('post')){
      $bidmsg = $this->Messages->patchEntity($bidmsg, $this->request->getData());

      if($this->Messages->save($bidmsg)){
        $this->Flash->success(__('保存しました。'));
      } else {
        $this->Flash->error(__('保存に失敗しました。もう一度入力してください。'));
      }
    }

    try {
      $bidinfo = $this->Bidinfo->get($bidinfo_id, ['contain'=>['Products']]);
    } catch(Exception $e) {
      $bidinfo = null;
    }

    $bidmsgs = $this->Messages->find('all', [
      'conditions' => ['bidinfo_id' => $bidinfo_id],
      'contain' => ['Users'],
      'order' => ['created' => 'desc']])->toArray();
    $this->set(compact('bidmsgs', 'bidinfo', 'bidmsg'));
  }

  public function rakusatsu()
  {
    $bidinfo = $this->paginate('Bidinfo', [
      'conditions' => ['Bidinfo.user_id' => $this->Auth->user('id')],
      'contain' => ['Users', 'Products'],
      'order' => ['created'=>'desc'],
      'limit' => 10])->toArray();
    $this->set(compact('bidinfo'));
  }

  public function exhibit()
  {
    $products = $this->paginate('Products', [
      'conditions' => ['Products.user_id' => $this->Auth->user('id')],
      'contain' => ['Users', 'Bidinfo'],
      'order' => ['created'=>'desc'],
      'limit' => 10])->toArray();
    $this->set(compact('products'));
  }

  public function newuser()
  {

  }
}
