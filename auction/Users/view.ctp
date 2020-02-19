<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bidinfo'), ['controller' => 'Bidinfo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bidinfo'), ['controller' => 'Bidinfo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bidrequests'), ['controller' => 'Bidrequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bidrequest'), ['controller' => 'Bidrequests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bidinfo') ?></h4>
        <?php if (!empty($user->bidinfo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->bidinfo as $bidinfo): ?>
            <tr>
                <td><?= h($bidinfo->id) ?></td>
                <td><?= h($bidinfo->product_id) ?></td>
                <td><?= h($bidinfo->user_id) ?></td>
                <td><?= h($bidinfo->price) ?></td>
                <td><?= h($bidinfo->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bidinfo', 'action' => 'view', $bidinfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bidinfo', 'action' => 'edit', $bidinfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bidinfo', 'action' => 'delete', $bidinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidinfo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bidrequests') ?></h4>
        <?php if (!empty($user->bidrequests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->bidrequests as $bidrequests): ?>
            <tr>
                <td><?= h($bidrequests->id) ?></td>
                <td><?= h($bidrequests->product_id) ?></td>
                <td><?= h($bidrequests->user_id) ?></td>
                <td><?= h($bidrequests->price) ?></td>
                <td><?= h($bidrequests->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bidrequests', 'action' => 'view', $bidrequests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bidrequests', 'action' => 'edit', $bidrequests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bidrequests', 'action' => 'delete', $bidrequests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidrequests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Messages') ?></h4>
        <?php if (!empty($user->messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bidinfo Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->messages as $messages): ?>
            <tr>
                <td><?= h($messages->id) ?></td>
                <td><?= h($messages->bidinfo_id) ?></td>
                <td><?= h($messages->user_id) ?></td>
                <td><?= h($messages->message) ?></td>
                <td><?= h($messages->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($user->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Finished') ?></th>
                <th scope="col"><?= __('Endtime') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->user_id) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->finished) ?></td>
                <td><?= h($products->endtime) ?></td>
                <td><?= h($products->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
