<?php /* Smarty version 2.6.26, created on 2022-02-05 15:39:20
         compiled from file:C:%5Cwamp64%5Cwww%5Cocs/plugins/blocks/notification/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:C:\\wamp64\\www\\ocs/plugins/blocks/notification/block.tpl', 13, false),array('function', 'url', 'file:C:\\wamp64\\www\\ocs/plugins/blocks/notification/block.tpl', 16, false),)), $this); ?>
<?php if ($this->_tpl_vars['currentConference']): ?>
<div class="block" id="notification">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.notifications"), $this);?>
</span>
	<ul>
		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'notification'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.view"), $this);?>
</a>
				<?php if ($this->_tpl_vars['unreadNotifications'] > 0): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.notificationsNew",'numNew' => $this->_tpl_vars['unreadNotifications']), $this);?>
<?php endif; ?></li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'notification','op' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.manage"), $this);?>
</a></li>			
		<?php else: ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'notification'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.view"), $this);?>
</a></li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'notification','op' => 'subscribeMailList'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.subscribe"), $this);?>
</a> / <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'notification','op' => 'unsubscribeMailList'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.unsubscribe"), $this);?>
</a></li>	
		<?php endif; ?>
	</ul>
</div>	
<?php endif; ?>