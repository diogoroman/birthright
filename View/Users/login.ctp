<div class="login">
<?php
echo $this->Form->create('User');
echo $this->Form->input('username', array('label' => __('Usuário', true)));
echo $this->Form->input('password', array('label' => __('Senha', true)));
echo $this->Form->submit(__('Entrar',1));
echo $this->Form->end();
?>
</div>