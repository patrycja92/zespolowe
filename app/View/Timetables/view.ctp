<div class="timetables view">
<h2><?php echo __('Timetable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timetable['Timetable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($timetable['Timetable']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timetable['Users']['id'], array('controller' => 'users', 'action' => 'view', $timetable['Users']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

