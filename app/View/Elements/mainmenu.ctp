<?php if($this->Session->read('Auth.User')):
  function pracownik(View $obj) {
    echo '<li>'. $obj->Html->link(__('New Advance'), 
            array('controller' => 'advances' ,'action' => 'add')).'</li>';
    echo '<li>'. $obj->Html->link(__('List Advances'), 
            array('controller' => 'advances' ,'action' => 'index')).'</li>';
    echo '<li>'. $obj->Html->link(__('New Timetable'),
            array('controller' => 'timetables' ,'action' => 'add')).'</li>';
    echo '<li>'. $obj->Html->link(__('List Timetables'), 
            array('controller' => 'timetables' ,'action' => 'index')).'</li>';
   };
  
  function ksiegowa(View $obj) {
    echo '<li>'.$obj->Html->link(__('List Advances'), 
            array('controller' => 'advances' ,'action' => 'index')).'</li>'; 
    echo '<li>'. $obj->Html->link(__('List Timetables'), 
            array('controller' => 'timetables' ,'action' => 'index')).'</li>';
    echo '<li>'. $obj->Html->link(__('New Transaction'), 
            array('controller' => 'transactions' ,'action' => 'add')).'</li>';
    echo '<li>'. $obj->Html->link(__('List Transactions'), 
            array('controller' => 'transactions' ,'action' => 'index')).'</li>';
    
  };
 
  function kierownik(View $obj) {
      echo '<li>'. $obj->Html->link(__('New Investment'), 
              array('controller' => 'investments' ,'action' => 'add')).'</li>';
      echo '<li>'. $obj->Html->link(__('List Investments'), 
              array('controller' => 'investments' ,'action' => 'index')).'</li>';
  };
  
  function admin(View $obj) {
      pracownik($obj);
      ksiegowa($obj);
      kierownik($obj);
      echo '<li>'. $obj->Html->link(__('New User'), 
              array('controller' => 'users' ,'action' => 'add')).'</li>';
      echo '<li>'. $obj->Html->link(__('List Users'), 
              array('controller' => 'users' ,'action' => 'index')).'</li>';
  };



?>
<div class = "actions">
	<h3><?php echo __('Actions'); ?></h3>
        
	<ul>
		<?php 
                    if($this->Session->read('Auth.User.privilages') == 1){
                        admin($this);
                    }
                    if($this->Session->read('Auth.User.privilages') == 2){
                        kierownik($this);
                    }
                    if($this->Session->read('Auth.User.privilages') == 3){
                        ksiegowa($this);
                    }
                    if($this->Session->read('Auth.User.privilages') == 4){
                        pracownik($this);
                    }
                ?>
	</ul>
</div>
<?php 
    endif;
?>