<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Name', 'name'); ?>

			<div class="input">
				<?php echo Form::input('name', Input::post('name', isset($form) ? $form->name : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Email', 'email'); ?>

			<div class="input">
				<?php echo Form::input('email', Input::post('email', isset($form) ? $form->email : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Comment', 'comment'); ?>

			<div class="input">
				<?php echo Form::input('comment', Input::post('comment', isset($form) ? $form->comment : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Ip address', 'ip_address'); ?>

			<div class="input">
				<?php echo Form::input('ip_address', Input::post('ip_address', isset($form) ? $form->ip_address : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('User agent', 'user_agent'); ?>

			<div class="input">
				<?php echo Form::input('user_agent', Input::post('user_agent', isset($form) ? $form->user_agent : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>