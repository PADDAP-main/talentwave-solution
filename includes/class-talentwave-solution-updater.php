<?php

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

require plugin_dir_path( __FILE__ ) . 'plugin-update-checker/plugin-update-checker.php';

class Talentwave_Solution_Updater {

	public function get_update(): void {
		$myUpdateChecker = PucFactory::buildUpdateChecker(
			'https://github.com/PADDAP-main/talentwave-solution',
			__FILE__,
			'talentwave-solution'
		);

		$myUpdateChecker->getVcsApi()->enableReleaseAssets();
	}

}