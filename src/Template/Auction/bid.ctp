<h2>「<?= $product->name ?>」を入札</h2>
<?= $this->Form->create($bidrequest) ?>
<fieldset>
  <legend><?= __('入札の値段を入力してください。') ?></legend>
  <?php
  echo $this->Form->hidden('product_id', ['value'=>$bidrequest->product_id]);
  echo $this->Form->hidden('user_id', ['value'=>$bidrequest->user_id]);
  echo $this->Form->control('price');
  ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
