<h2 class="title">Zaloguj się na swoje konto</h2>
<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
<?php
    echo $this->Form->create('User');
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->end(array('label' => 'Zaloguj się'));
?>
</div>