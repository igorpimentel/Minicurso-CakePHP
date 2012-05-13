<?php echo $this->Form->create('Noticia');?>
    <fieldset>
        <legend>Adicionar Nova Notícia:</legend>
    	<?php echo $this->Form->input('titulo'); ?>
    </fieldset>
<?php echo $this->Form->end(__('Salvar'));?>