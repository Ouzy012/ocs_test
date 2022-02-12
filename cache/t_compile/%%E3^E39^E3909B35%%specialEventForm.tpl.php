<?php /* Smarty version 2.6.26, created on 2022-02-11 08:51:11
         compiled from manager/scheduler/specialEventForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/scheduler/specialEventForm.tpl', 14, false),array('function', 'fieldLabel', 'manager/scheduler/specialEventForm.tpl', 36, false),array('function', 'form_language_chooser', 'manager/scheduler/specialEventForm.tpl', 38, false),array('function', 'translate', 'manager/scheduler/specialEventForm.tpl', 39, false),array('function', 'html_select_date', 'manager/scheduler/specialEventForm.tpl', 50, false),array('function', 'html_select_time', 'manager/scheduler/specialEventForm.tpl', 56, false),array('modifier', 'assign', 'manager/scheduler/specialEventForm.tpl', 14, false),array('modifier', 'escape', 'manager/scheduler/specialEventForm.tpl', 28, false),array('modifier', 'default', 'manager/scheduler/specialEventForm.tpl', 50, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageCrumbTitle', ($this->_tpl_vars['specialEventTitle'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['specialEventId']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSpecialEvent','path' => $this->_tpl_vars['specialEventId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'specialEventUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'specialEventUrl'));?><?php echo ''; ?><?php $this->assign('pageTitle', "manager.scheduler.specialEvent.editSpecialEvent"); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSpecialEvent','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'specialEventUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'specialEventUrl'));?><?php echo ''; ?><?php $this->assign('pageTitle', "manager.scheduler.specialEvent.createSpecialEvent"); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('pageId', "manager.scheduler.specialEvent.specialEventForm"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br/>

<form name="specialEvent" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateSpecialEvent'), $this);?>
">
<?php if ($this->_tpl_vars['specialEventId']): ?>
<input type="hidden" name="specialEventId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['specialEventId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'specialEvent','url' => $this->_tpl_vars['specialEventUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'name','required' => 'true','key' => "manager.scheduler.specialEvent.name"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="name[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['name'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" id="name" maxlength="80" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'startTime','required' => 'true','key' => "common.date"), $this);?>
</td>
	<td class="value" id="startTime">
		<?php echo smarty_function_html_select_date(array('prefix' => 'startTime','all_extra' => "class=\"selectMenu\"",'time' => ((is_array($_tmp=@$this->_tpl_vars['startTime'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['defaultStartTime']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['defaultStartTime'])),'start_year' => $this->_tpl_vars['firstYear'],'end_year' => $this->_tpl_vars['lastYear']), $this);?>

	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'startTime','required' => 'true','key' => "manager.scheduler.startTime"), $this);?>
</td>
	<td class="value">
		<?php echo smarty_function_html_select_time(array('prefix' => 'startTime','all_extra' => "class=\"selectMenu\"",'display_seconds' => false,'display_meridian' => true,'use_24_hours' => false,'time' => ((is_array($_tmp=@$this->_tpl_vars['startTime'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['defaultStartTime']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['defaultStartTime']))), $this);?>

	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'endTime','required' => 'true','key' => "manager.scheduler.endTime"), $this);?>
</td>
	<td class="value" id="endTime">
		<input name="endTimeDay" value="1" type="hidden" />
		<input name="endTimeMonth" value="1" type="hidden" />
		<input name="endTimeYear" value="2008" type="hidden" />
		<?php echo smarty_function_html_select_time(array('prefix' => 'endTime','all_extra' => "class=\"selectMenu\"",'display_seconds' => false,'display_meridian' => true,'use_24_hours' => false,'time' => ((is_array($_tmp=@$this->_tpl_vars['endTime'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['defaultStartTime']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['defaultStartTime']))), $this);?>

	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "manager.scheduler.specialEvent.description"), $this);?>
</td>
	<td class="value">
		<textarea name="description[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="description" cols="40" rows="10" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	</td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['specialEventId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.specialEvent.saveAndCreateAnother"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'specialEvents'), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>