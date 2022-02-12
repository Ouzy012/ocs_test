<?php /* Smarty version 2.6.26, created on 2022-02-11 08:50:34
         compiled from manager/scheduler/buildingForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/scheduler/buildingForm.tpl', 14, false),array('function', 'translate', 'manager/scheduler/buildingForm.tpl', 27, false),array('function', 'fieldLabel', 'manager/scheduler/buildingForm.tpl', 43, false),array('function', 'form_language_chooser', 'manager/scheduler/buildingForm.tpl', 45, false),array('modifier', 'assign', 'manager/scheduler/buildingForm.tpl', 14, false),array('modifier', 'translate', 'manager/scheduler/buildingForm.tpl', 25, false),array('modifier', 'escape', 'manager/scheduler/buildingForm.tpl', 35, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageCrumbTitle', ($this->_tpl_vars['buildingTitle'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['buildingId']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editBuilding','path' => $this->_tpl_vars['buildingId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'buildingUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'buildingUrl'));?><?php echo ''; ?><?php $this->assign('pageTitle', "manager.scheduler.building.editBuilding"); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createBuilding','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'buildingUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'buildingUrl'));?><?php echo ''; ?><?php $this->assign('pageTitle', "manager.scheduler.building.createBuilding"); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('pageId', "manager.scheduler.building.buildingForm"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="buildingForm">
<ul class="menu">
	<li class="current"><a href="<?php echo $this->_tpl_vars['buildingUrl']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitle'])) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)); ?>
</a></li>
	<?php if ($this->_tpl_vars['buildingId']): ?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'rooms','path' => $this->_tpl_vars['buildingId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.rooms"), $this);?>
</a></li>
	<?php endif; ?>
</ul>

<br/>

<form name="building" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateBuilding'), $this);?>
">
<?php if ($this->_tpl_vars['buildingId']): ?>
<input type="hidden" name="buildingId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['buildingId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
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
			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'building','url' => $this->_tpl_vars['buildingUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'name','required' => 'true','key' => "manager.scheduler.building.name"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="name[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['name'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" id="name" maxlength="80" class="textField" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abbrev','required' => 'true','key' => "manager.scheduler.building.abbrev"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="abbrev[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['abbrev'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" id="abbrev" maxlength="80" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "manager.scheduler.building.description"), $this);?>
</td>
	<td class="value">
		<textarea name="description[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="description" cols="40" rows="10" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	</td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['buildingId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.building.saveAndCreateAnother"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'buildings'), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>