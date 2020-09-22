<?php
class shopZaglushkaPlugin extends shopPlugin
{
	public function routing($route = array())
	{
		$settings = wa('shop')->getPlugin('zaglushka')->getSettings();
		$isUserAdmin = wa()->getUser()->isAdmin();
		if (isset($settings['cstate'])) {
			if ($settings['cstate']==1) {
				if (!$isUserAdmin) {
				    return array('*' => 'Route/Route');
				} else {
				    if (isset($settings['foradmin'])) {
    					if ($settings['foradmin']==1) {
    					    return array('*' => 'Route/Route');
    					}
				    }
				}
			}
		}
	}
	 
	public function backendmenu() {
		$settings = wa('shop')->getPlugin('zaglushka')->getSettings();
		if (isset($settings['cstate'])) {
			if ($settings['cstate']==1) {
			    $script = '$(function(){var achtung = \'<div id="zaglushka" style="padding:5px;background:#ffa5a5;color:#982929;"><b>Внимание!</b> Активирован плагин «Заглушка»! Для деактивации перейдите по <a href="\'+backend_url+\'shop/?action=plugins#/zaglushka">ссылке</a>.</div>\';$(achtung).insertBefore(\'#wa\');});';
				return array(
				    'aux_li'  => '<li style="display:none;"><script type="text/javascript">'.$script.'</script></li>'
				);
			}
		}
	}
	
}
