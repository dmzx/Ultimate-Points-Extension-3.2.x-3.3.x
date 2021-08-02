<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2016 dmzx & posey - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\migrations;

class ultimatepoints_1_1_8 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\ultimatepoints\migrations\ultimatepoints_1_1_7',
        ];
	}

	public function update_data()
	{
		return [
			['config.update', ['ultimate_points_version', '1.1.8']],
        ];
	}
}
