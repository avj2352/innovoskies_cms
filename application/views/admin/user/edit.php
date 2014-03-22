<div class="panel-heading">
<h3><strong><?php echo empty($user->id) ? 'Add a new User': 'Edit User: ' . $user->name; ?></strong></h3>
  </div>
  <div class="panel-body">
    <!-- <?php //echo '<pre>' . print_r($this->session->userdata, TRUE) . '</pre>'; ?> -->
  	<?php echo validation_errors('<p class="errors">'); ?>
    <?php echo form_open(); ?>
    <!--<?php //var_dump($hashvalue); ?>-->
    <table class="table">
        <tr>
            <td>Name:</td>
            <td><?php echo form_input('name', set_value('name', $user->name)); ?></td>
        </tr>
    	<tr>
    		<td>Email:</td>
    		<td><?php echo form_input('email', set_value('email', $user->email)); ?></td>
    	</tr>
    	<tr>
    		<td>Password: </td>
    		<td><?php echo form_password('password', set_value('password')); ?></td>
    	</tr>
        <tr>
            <td>Confirm Password: </td>
            <td><?php echo form_password('password_confirm', set_value('password_confirm')); ?></td>
        </tr>
    	<tr>
    		<td></td>
    		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
    	</tr>
    </table>
    <?php  echo form_close(); ?>
  </div>