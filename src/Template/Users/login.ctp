<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>サロン自作HP</title>
  <link rel="stylesheet" type="text/css" href="../webroot/css/reservebase.css">
</head>
<body>
  <?php
  require("header.ctp");
  ?>
<div class="user form">
  <?= $this->Flash->render('auth') ?>
  <?= $this->Form->create() ?>
  <fieldset>
    <legend>ユーザ名とパスワードを入力してください。</legend>
    <?= $this->Form->input('username') ?>
    <?= $this->Form->input('password') ?>
  </fieldset>
  <?= $this->Form->button(__('ログイン')); ?>
  <?= $this->Form->end() ?>
</div>
<div>
  <p>会員登録がお済みでない方はコチラ</p>
  <?= $this->Html->link(__('新規登録'), ['controller' => 'Reservation', 'action' => 'newuser']) ?>
</div>
</body>
</html>
