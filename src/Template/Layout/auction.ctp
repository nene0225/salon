<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale-scale=1.0">
  <title>
    <?= $this->name.'/'.$this->request->action ?>
  </title>
  <?= $this->Html->meta('icon') ?>
  <?= $this->Html->css('base.css') ?>
  <?= $this->Html->css('auction.css') ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<body>
  <nav class="top-bar titlebar" data-topbar role="navigation">
    <ul class="title-area large-3 medium-4 columns name">
      <li>
        <h1><?= $this->Html->link(__('Auction!['.$authuser['username'].']'),['action'=>'index'])?></h1>
      </li>
    </ul>
  </nav>
  <?= $this->Flash->render() ?>
  <div class="container clearfix">
    <div class="auctions index medium-9 columns content">
      <?= $this->fetch('content') ?>
    </div>
    <nav class="large-2 medium-3 columns sidebar" id="auction-sidebar">
      <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('あなたの落札情報'),['action'=>'rakusatsu']) ?></li>
        <li><?= $this->Html->link(__('あなたの出品情報'),['action'=>'exhibit']) ?></li>
        <li><?= $this->Html->link(__('商品を出品する'),['action'=>'add']) ?></li>
        <li><?= $this->Html->link(__('商品リストを見る'),['action'=>'index']) ?></li>
      </ul>
    </nav>
  </div>
  <footer>
  </footer>
</body>
</html>
