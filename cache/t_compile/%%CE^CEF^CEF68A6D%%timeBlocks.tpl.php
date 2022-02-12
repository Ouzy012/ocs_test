<?php /* Smarty version 2.6.26, created on 2022-02-11 08:57:38
         compiled from manager/scheduler/timeBlocks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/scheduler/timeBlocks.tpl', 18, false),array('function', 'translate', 'manager/scheduler/timeBlocks.tpl', 18, false),array('function', 'page_info', 'manager/scheduler/timeBlocks.tpl', 66, false),array('function', 'page_links', 'manager/scheduler/timeBlocks.tpl', 67, false),array('modifier', 'translate', 'manager/scheduler/timeBlocks.tpl', 19, false),array('modifier', 'date_format', 'manager/scheduler/timeBlocks.tpl', 39, false),array('modifier', 'escape', 'manager/scheduler/timeBlocks.tpl', 48, false),array('block', 'iterate', 'manager/scheduler/timeBlocks.tpl', 38, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "manager.scheduler.timeBlocks"); ?><?php echo ''; ?><?php $this->assign('pageId', "manager.scheduler.timeBlocks"); ?><?php echo ''; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'schedule'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.schedule"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'timeBlocks'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitle'])) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)); ?>
</a></li>
</ul>

<br />

<a name="timeBlocks"></a>

<table width="100%" class="listing">
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.date"), $this);?>
</td>
		<td width="55%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.time"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'timeBlocks','item' => 'timeBlock')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('thisDate', ((is_array($_tmp=$this->_tpl_vars['timeBlock']->getStartTime())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']))); ?>
	<?php if ($this->_tpl_vars['lastDate']): ?>		<tr>
			<td colspan="3" class="<?php if ($this->_tpl_vars['lastDate'] != $this->_tpl_vars['thisDate']): ?>end<?php endif; ?>separator">&nbsp;</td>
		</tr>
	<?php endif; ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['timeBlock']->getStartTime())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['timeBlock']->getStartTime())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['timeFormat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['timeFormat'])); ?>
&nbsp;&ndash;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['timeBlock']->getEndTime())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['timeFormat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['timeFormat'])); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editTimeBlock','path' => $this->_tpl_vars['timeBlock']->getId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteTimeBlock','path' => $this->_tpl_vars['timeBlock']->getId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.timeBlock.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<?php if ($this->_tpl_vars['timeBlocks']->eof()): ?>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php $this->assign('lastDate', $this->_tpl_vars['thisDate']); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['timeBlocks']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.timeBlock.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="1" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['timeBlocks']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'timeBlocks','name' => 'timeBlocks','iterator' => $this->_tpl_vars['timeBlocks']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createTimeBlock'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.timeBlock.create"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>