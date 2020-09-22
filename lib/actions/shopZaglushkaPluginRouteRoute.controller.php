<?php
class shopZaglushkaPluginRouteRouteController extends waController 
{
	public function execute()
	{
		$settings = wa('shop')->getPlugin('zaglushka')->getSettings();
		$path = wa()->getAppPath('plugins/zaglushka/templates/', 'shop');
		$view = wa()->getView();
		$view->assign('content', $settings['text']);
		echo $view->fetch($path.'zaglushka.html');
	}
	
}