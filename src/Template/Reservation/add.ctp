<h2>予約を追加する</h2>
<?= $this->Form->create($booking) ?>
<div id="details">
  <h2>予約詳細</h2>
  <p>ご希望の時間とメニューを選択してください。</p>
  <table>
    <tr>
      <th>ご希望の時間：</th>
      <td>
        <div class="radio">
        <input type="radio" name="radio_time" value="10:00〜">10:00〜&emsp;
        <input type="radio" name="radio_time" value="11:00〜">11:00〜&emsp;
        <input type="radio" name="radio_time" value="12:00〜">12:00〜<br>
        <input type="radio" name="radio_time" value="13:00〜">13:00〜&emsp;
        <input type="radio" name="radio_time" value="14:00〜">14:00〜&emsp;
        <input type="radio" name="radio_time" value="15:00〜">15:00〜<br>
        <input type="radio" name="radio_time" value="16:00〜">16:00〜&emsp;
        <input type="radio" name="radio_time" value="17:00〜">17:00〜&emsp;
        <input type="radio" name="radio_time" value="18:00〜">18:00〜
      </div>
      </td>
    </tr>
    <tr>
      <th>
        ご希望のメニュー：<br>
        （複数選択可）
      </th>
      <td>
        <div class="chk">
        <input type="checkbox" name="menu[]" value="オイルマッサージ　50分　¥6,000">オイルマッサージ　50分　¥6,000<br>
        <input type="checkbox" name="menu[]" value="フェイシャル　40分　¥3,800">フェイシャル　40分　¥3,800<br>
        <input type="checkbox" name="menu[]" value="フェイシャル（パック付）　50分　¥5,500">フェイシャル（パック付）　50分　¥5,500<br>
        <input type="checkbox" name="menu[]" value="まつエク 50分付け放題（100本保証）　¥4,200">まつエク 50分付け放題（100本保証）　¥4,200
      </div>
      </td>
    </tr>
</table>
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
