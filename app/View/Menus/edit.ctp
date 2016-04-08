<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
echo $this->Form->create('Menu');
echo $this->Form->input('title');
echo $this->Form->input('parent');
echo $this->Form->input('link');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Menuitem');
?>