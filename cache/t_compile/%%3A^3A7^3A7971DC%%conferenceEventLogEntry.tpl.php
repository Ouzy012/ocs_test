<?php /* Smarty version 2.6.26, created on 2022-02-08 12:22:22
         compiled from manager/conferenceEventLogEntry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/conferenceEventLogEntry.tpl', 17, false),array('function', 'url', 'manager/conferenceEventLogEntry.tpl', 46, false),array('function', 'icon', 'manager/conferenceEventLogEntry.tpl', 50, false),array('modifier', 'escape', 'manager/conferenceEventLogEntry.tpl', 25, false),array('modifier', 'date_format', 'manager/conferenceEventLogEntry.tpl', 29, false),array('modifier', 'concat', 'manager/conferenceEventLogEntry.tpl', 42, false),array('modifier', 'assign', 'manager/conferenceEventLogEntry.tpl', 43, false),array('modifier', 'to_array', 'manager/conferenceEventLogEntry.tpl', 46, false),array('modifier', 'strip_unsafe_html', 'manager/conferenceEventLogEntry.tpl', 59, false),array('modifier', 'nl2br', 'manager/conferenceEventLogEntry.tpl', 59, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "event.eventLog"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="conferenceEventLog">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "conference.history.conferenceEventLog"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="80%" class="value"><?php echo $this->_tpl_vars['logEntry']->getLogId(); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.schedConf"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getSchedConfTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.date"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getDateLogged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatLong'])); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "event.logLevel"), $this);?>
</td>
		<td class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getLogLevelString()), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
		<td class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getAssocTypeLongString()), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.user"), $this);?>
</td>
		<td class="value">
			<?php $this->assign('emailString', ((is_array($_tmp=$this->_tpl_vars['logEntry']->getUserFullName())) ? $this->_run_mod_handler('concat', true, $_tmp, " <", $this->_tpl_vars['logEntry']->getUserEmail(), ">") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, " <", $this->_tpl_vars['logEntry']->getUserEmail(), ">"))); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getMessage(),'params' => $this->_tpl_vars['logEntry']->getEntryParams()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'bodyContent') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'bodyContent'));?>

			<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getEventTitle()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'titleTrans') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'titleTrans'));?>

			<?php if ($this->_tpl_vars['logEntry']->getIsTranslated()): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl'],'subject' => $this->_tpl_vars['titleTrans'],'body' => $this->_tpl_vars['bodyContent']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php else: ?>				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl'],'subject' => $this->_tpl_vars['titleTrans'],'body' => $this->_tpl_vars['logEntry']->getMessage()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getUserFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.event"), $this);?>
</td>
		<td class="value">
			<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp=$this->_tpl_vars['logEntry']->getEventTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</strong>
			<br /><br />
			<?php if ($this->_tpl_vars['logEntry']->getIsTranslated()): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getMessage(),'params' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['logEntry']->getEntryParams())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp))), $this);?>

			<?php else: ?>				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['logEntry']->getMessage())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

			<?php endif; ?>
		</td>
	</tr>
</table>
<?php if ($this->_tpl_vars['isDirector']): ?>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'clearConferenceEventLog','path' => $this->_tpl_vars['logEntry']->getLogId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "conference.event.confirmDeleteLogEntry"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "conference.event.deleteLogEntry"), $this);?>
</a><br/>
<?php endif; ?>

<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'conferenceEventLog'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "conference.event.backToEventLog"), $this);?>
</a>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>