<h2>「<?= $product->name ?>」の詳細</h2>
<table class="vertical-table">
  <tr>
    <th class="small" scope="row">出品者</th>
    <td><?= $product->has('user') ? $product->user->username :''?></td>
  </tr>
  <tr>
    <th scope="row">商品名</th>
    <td><?= h($product->name) ?></td>
  </tr>
  <tr>
    <th scope="row">商品ID</th>
    <td><?= $this->Number->format($product->id) ?></td>
  </tr>
  <tr>
    <th scope="row">終了時間</th>
    <td><?= h($product->endtime) ?></td>
  </tr>
  <tr>
    <th scope="row">投稿時間</th>
    <td><?= h($product->created) ?></td>
  </tr>
  <tr>
    <th scope="row"><?= __('終了した？') ?></th>
    <td><?= $product->finoshed ? __('Yes') : __('No') ?></td>
  </tr>
</table>
<div classs="related">
  <h4><?= __('落札情報') ?></h4>
  <?php if(!empty($product->bidinfo)): ?>
    <table cellpadding="0" cellspacing="0">
      <tr>
        <th scope="col">落札者</th>
        <th scope="col">落札金額</th>
        <th scope="col">落札日時</th>
      </tr>
      <tr>
        <td><?= h($product->bidinfo->user->username)?></td>
        <td><?= h($product->bidinfo->price)?></td>
        <td><?= h($product->endtime)?></td>
      </tr>
    </table>
  <?php else: ?>
    <p><?= '落札情報はありません。' ?></p>
  <?php endif; ?>
</div>
<div classs="related">
  <h4><?= __('入札情報') ?></h4>
  <?php if(!$product->finished): ?>
    <h6><a href="<?= $this->Url->build(['action'=>'bid', $product->id]) ?>"><<入札する>></a></h6>
    <?php if(!empty($bidrequests)): ?>
      <table cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">入札者</th>
            <th scope="col">金額</th>
            <th scope="col">入札日時</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($bidrequests as $bidrequest): ?>
            <tr>
              <td><?= h($bidrequest->user->username) ?></td>
              <td><?= h($bidrequest->price) ?></td>
              <td><?= $bidrequest->created ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p><?= '入札は、まだありません。' ?></p>
    <?php endif; ?>
  <?php else: ?>
    <p><?= '入札は、終了しました。' ?></p>
  <?php endif; ?>
</div>
