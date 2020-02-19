<h2>様の予約詳細</h2>
<table class="vertical-table">
  <tr>
    <th scope="row">日にち</th>
    <td><?= h($booking->cosmedate) ?></td>
  </tr>
  <tr>
    <th scope="row">時間</th>
    <td><?= h($booking->cosmetime) ?></td>
  </tr>
  <tr>
    <th scope="row">メニュー</th>
    <td><?= h($booking->menu) ?></td>
  </tr>
  <tr>
    <th scope="row">予約完了日時</th>
    <td><?= h($booking->created) ?></td>
  </tr>
</table>
