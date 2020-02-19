<h2>予約を追加する</h2>
<?= $this->Form->create($booking) ?>
<div id="details">
  <h2>予約詳細</h2>
  <p>ご希望の時間とメニューを選択してください。</p>
<a href="reservetop.php">
  <p class="return">▶︎日にちを選び直す</p>
</a>
</div>
<fieldset>
  <legend>ご希望のメニュー・日にち・時間を入力してください。</legend>
  <?php
  echo $this->Form->hidden('user_id',['value' => $authuser['id']]);
  echo $this->Form->control('menu');
  echo $this->Form->control('cosmedate');
  echo $this->Form->radio('cosmetime',[
    ['text' => '10:00〜', 'value' => '10:00〜'],
    ['text' => '11:00〜', 'value' => '11:00〜'],
    ['text' => '12:00〜', 'value' => '12:00〜'],
    ['text' => '13:00〜', 'value' => '13:00〜'],
    ['text' => '14:00〜', 'value' => '14:00〜'],
    ['text' => '15:00〜', 'value' => '15:00〜'],
    ['text' => '16:00〜', 'value' => '16:00〜'],
    ['text' => '17:00〜', 'value' => '17:00〜'],
    ['text' => '18:00〜', 'value' => '18:00〜'],
  ]);
  ?>
</fieldset>
<?= $this->Form->button(__('確定')) ?>
<?= $this->Form->end() ?>
