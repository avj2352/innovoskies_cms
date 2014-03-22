<h3><strong><?php echo empty($page->id) ? 'Add a new Page': 'Edit Page: ' . $page->title; ?></strong></h3>
    <!-- <?php //echo '<pre>' . print_r($this->session->pagedata, TRUE) . '</pre>'; ?> -->
  	<?php echo validation_errors('<p class="errors">'); ?>
    <?php echo form_open(); ?>
    <!--<?php //var_dump($hashvalue); ?>-->
    <table class="table">
        <tr>
            <td>Parent:</td>
            <!-- The first  value is the name- parent_id -->
            <!-- The second value should hold an array with all the available options -->
            <!-- The third value is a condition: -->
            <!-- 1. Set value if post variable is there, else 2. Fetch from the DB  -->
    <td><?php echo form_dropdown('parent_id', $pages_no_parents, $this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id ); ?></td>
        </tr>
        <tr>
            <td>Template:</td>
            <!-- The first  value is the name- parent_id -->
            <!-- The second value should hold an array with all the available options -->
            <!-- The third value is a condition: -->
            <!-- 1. Set value if post variable is there, else 2. Fetch from the DB  -->
    <td><?php echo form_dropdown('template', array('page' => 'Page', 'news_archive' => 'News Archive', 'homepage' => 'Homepage'), $this->input->post('template') ? $this->input->post('template') : $page->template ); ?></td>
        </tr>
        <tr>
            <td>Title:</td>
            <td><?php echo form_input('title', set_value('title', $page->title)); ?></td>
        </tr>
    	<tr>
    		<td>Slug:</td>
    		<td><?php echo form_input('slug', set_value('slug', $page->slug)); ?></td>
    	</tr>
    	<tr>
    		<td>Body</td>
    		<td><?php echo form_textarea('body', set_value('body', $page->body), 'class="tinymce", rows="4", columns="100"'); ?></td>
    	</tr>
    	<tr>
    		<td></td>
    		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
    	</tr>
    </table>
    <?php  echo form_close(); ?>