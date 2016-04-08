<!-- File: /app/View/Posts/index.ctp -->

<h1>test: newsitems</h1>
<p><?php echo $this->Html->link('Add Newsitem', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($newsitems as $news): 
    if($news['Newsitem']['embargo_date'] <= date('Y-m-d')){
        ?>
    <tr>
        <td><?php echo $news['Newsitem']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $news['Newsitem']['title'],
                    array('action' => 'view', $news['Newsitem']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $news['Newsitem']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $news['Newsitem']['id'])
                );
            ?>
        </td>
        <td>
            <?php 
                echo $news['Newsitem']['created'];
            ?>
        </td>
    </tr>
    <?php }?>
    <?php endforeach; ?>
</table>