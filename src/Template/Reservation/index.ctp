<h2><?= $authuser['name']?>様の予約ページ</h2>
<h3>予約一覧</h3>
<table cellpadding="0" cellspacing="0">
  <thead>
    <?php if(empty($reservations)): ?>
      <p>予約はありません。</p>
    <?php else: ?>
    <tr>
      <th scope="col"><?= $this->Paginator->sort('日にち') ?></th>
      <th scope="col"><?= $this->Paginator->sort('時間') ?></th>
      <th scope="col"><?= $this->Paginator->sort('メニュー') ?></th>
      <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reservations as $booking): ?>
    <tr>
      <td><?= h($booking->cosmedate) ?></td>
      <td><?= h($booking->cosmetime) ?></td>
      <td><?= h($booking->menu) ?></td>
      <td class="actions">
        <?= $this->Html->link(__('詳細'),['action'=>'view',$booking->id])?>
      </td>
    </tr>
    <?php endforeach; ?>
  <?php endif; ?>
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
