<h2>ミニオークション</h2>
<h3>商品一覧</h3>
<table cellpadding="0" cellspacing="0">
  <thead>
    <tr>
      <th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
      <th scope="col"><?= $this->Paginator->sort('finished') ?></th>
      <th scope="col"><?= $this->Paginator->sort('endtime') ?></th>
      <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($auction as $product): ?>
    <tr>
      <td><?= h($product->name) ?></td>
      <td><?= h($product->finished ? 'Finished':'') ?></td>
      <td><?= h($product->endtime) ?></td>
      <td class="actions">
        <?= $this->Html->link(__('View'),['action'=>'view',$product->id])?>
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
