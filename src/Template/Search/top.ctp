   
<?=$this->Form->create('search',[
        'type' => 'post',
        'url' => ['controller' => 'search', 'action' => 'result' ]]
    ) ?>
    <?=$this->Form->text('text',  ['class' => 'col-sm-2 form-control']) ?>
    <?=$this->Form->submit('OK',  ['class' => 'btn btn-primary']) ?>
    <?=$this->Form->end() ?>
