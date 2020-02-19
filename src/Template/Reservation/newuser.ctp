<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>サロン自作HP</title>
  <link rel="stylesheet" type="text/css" href="../webroot/css/reservebase.css">
  <link rel="stylesheet" type="text/css" href="../webroot/css/salonhome.css">
</head>
<body>

  <?php
  require("header.ctp");
  ?>

<div id="userinfo">
  <h2>お客様情報<span style="color:red">（全項目必須）</span></h2>
  <p>以下に必要事項を入力し、送信ボタンを押してください。</p>
  <?= $this->Form->create($newuser) ?>
  <table>
    <tr>
      <th>氏名</th>
      <td><?= $this->Form->control('name', ['label' => false]); ?></td>
    </tr>
    <tr>
      <th>フリガナ</th>
      <td><?= $this->Form->control('kana', ['label' => false]); ?></td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td><?= $this->Form->control('tel', ['label' => false]); ?></td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td><?= $this->Form->control('email', ['label' => false]); ?></td>
      <td></td>
    </tr>
    <tr>
      <th>ユーザ名</th>
      <td><?= $this->Form->control('username', ['label' => false]); ?></td>
    </tr>
    <tr>
      <th>パスワード</th>
      <td><?= $this->Form->control('password', ['label' => false]); ?></td>
    </tr>
  </table>
  <?= $this->Form->hidden('role',['value'=>'user']) ?>
  <div class="submit">
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</body>
</html>
