<?php
/*
WordChanger - Built to censor words (Any words of your choice) in GNUSocial/StatusNet
Built by: Mitchell Urgero (@loki@urgero.org) <info@urgero.org>
*/

if (!defined('STATUSNET')) {
    exit(1);
}
class WordChangerPlugin extends Plugin
{
	public function initialize()
    {
    	return true;
    }
    static function settings($setting)
	{
		$settings['wordlist'] = array("shit"=>"poop");
		// config.php settings override the settings in this file
		$configphpsettings = common_config('site','WordChanger') ?: array();
		foreach($configphpsettings as $configphpsetting=>$value) {
			$settings[$configphpsetting] = $value;
		}
		if(isset($settings[$setting])) {
			return $settings[$setting];
		}
		else {
			return false;
		}
	}
	public function onStartNoticeSave($notice){
		if ($notice->isLocal()){
			$origContent = $notice->content;
			$origRendered = $notice->rendered;
			if(empty(self::settings("wordlist"))){
				return true;
			}
			foreach(self::settings("wordlist") as $key => $value){
				$origContent = preg_replace("/\b$key\b/", $value, $origContent);
				$origRendered = preg_replace("/\b$key\b/", $value, $origRendered);
			}
			$notice->content = $origContent;
			$notice->rendered = $origRendered;
		}
		return true;
	}
}
