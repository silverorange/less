<?php

require_once 'Swat/SwatHtmlHeadEntrySet.php';
require_once 'Swat/SwatJavaScriptHtmlHeadEntry.php';

/**
 * Less is a CSS pre-processor
 *
 * @package   Less
 * @copyright 2014 silverorange
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 */
class Less
{
	/**
	 * The package identifier
	 */
	const PACKAGE_ID = 'LESS';

	/**
	 * Gets the HTML head entries required by LESS
	 *
	 * @return SwatHtmlHeadEntrySet a set of SwatHtmlHeadEntry objects
	 *                               containing the required JavaScript files
	 *                               for client-side LESS.
	 */
	public static function getHtmlHeadEntrySet()
	{
		$set = new SwatHtmlHeadEntrySet();

		$set->addEntry(
			'packages/less/javascript/less-1.6.3.js',
			self::PACKAGE_ID
		);

		return $set;
	}
}

?>
