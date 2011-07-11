<?php 

$this->Html->addCrumb($settings['site_name'], array('controller' => 'forum', 'action' => 'index'));

if (!empty($post['Forum']['Parent']['slug'])) {
	$this->Html->addCrumb($post['Forum']['Parent']['title'], array('controller' => 'stations', 'action' => 'view', $post['Forum']['Parent']['slug']));
}

$this->Html->addCrumb($post['Forum']['title'], array('controller' => 'stations', 'action' => 'view', $post['Forum']['slug']));
$this->Html->addCrumb($post['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $post['Topic']['slug'])); ?>

<div class="title">
	<h2><?php __d('forum', 'Edit Post'); ?></h2>
</div>

<?php echo $this->Form->create('Post'); ?>

<div class="input textarea">
	<?php echo $this->Form->label('content', __d('forum', 'Content', true)); ?>

	<div id="textarea">
		<?php echo $this->Form->input('content', array('type' => 'textarea', 'rows' => 15, 'label' => false, 'div' => false)); ?>
	</div>

	<span class="clear"><!-- --></span>
	<?php echo $this->element('markitup', array('textarea' => 'PostContent')); ?>
</div>

<div class="input">
	<label><?php __d('forum', 'Allowed Tags'); ?>:</label> 
	[b], [u], [i], [img], [url], [email], [code], [align], [list], [li], [color], [size], [quote]
</div>

<?php 
echo $this->Form->submit(__d('forum', 'Update', true), array('class' => 'button'));
echo $this->Form->end(); ?>