<h2><?= $authuser['username'] ?>のホーム</h2>
<h3>出品情報</h3>
<table cellpadding="0" cellspacing="0">
  <thead>
    <tr>
      <th scope="col"><?= $this->Paginator->sort('id') ?></th>
      <th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
      <th scope="col"><?= $this->Paginator->sort('created') ?></th>
      <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $product): ?>
      <tr>
        <td><?= h($product->id) ?></td>
        <td><?= h($product->name) ?></td>
        <td><?= h($product->created) ?></td>
        <td class="actions">
          <?php if(!empty($product->bidinfo)): ?>
          <?= $this->Html->link(__('View'), ['action' => 'msg', $product->bidinfo->id]) ?>
        <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div class="paginator">
  <ul class="pagination">
    <?= $this->Paginator->first('<<'.__('first')) ?>
    <?= $this->Paginator->prev('<'.__('previous')) ?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next(__('next').'>') ?>
    <?= $this->Paginator->last(__('last').'>>') ?>
  </ul>
</div>
<h6><?= $this->Html->link(__('＜＜落札情報に移動'),['action' => 'rakusatsu']) ?></h6>
