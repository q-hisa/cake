
<?=$this->Html->link('CakePHP Rocks', array(
    'controller' => 'Search',
    'action' => 'result',
    'pid' => $pid
)) ?>

?>
this is resul
渡しのpidは、<?= h($pid); ?>です。# 渡しの名前は、textです
<h1><?= h($pid); ?></h1>