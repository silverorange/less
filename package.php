<?php

require_once 'PEAR/PackageFileManager2.php';

$version = '0.0.1';
$notes = <<<EOT
see ChangeLog
EOT;

$description =<<<EOT
PEAR packaged version of the LESS CSS framework. See
http://lesscss.org/.
EOT;

$package = new PEAR_PackageFileManager2();
PEAR::setErrorHandling(PEAR_ERROR_DIE);

$result = $package->setOptions(
	array(
		'filelistgenerator' => 'svn',
		'simpleoutput'      => true,
		'baseinstalldir'    => '/',
		'packagedirectory'  => './',
		'dir_roles'         => array(
			'www'           => 'data',
			'dependencies'  => 'data'
		)
	)
);

$package->setPackage('Less');
$package->setSummary('LESS CSS Framework');
$package->setDescription($description);
$package->setChannel('pear.silverorange.com');
$package->setPackageType('php');
$package->setLicense('Apache 2.0', 'http://www.apache.org/licenses/LICENSE-2.0');
$package->setReleaseVersion($version);
$package->setReleaseStability('stable');
$package->setAPIVersion('0.0.1');
$package->setAPIStability('stable');
$package->setNotes($notes);

$package->addIgnore('package.php');

$package->addMaintainer(
	'lead',
	'gauthierm',
	'Mike Gauthier',
	'mike@silverorange.com'
);

$package->addMaintainer(
	'lead',
	'nrf',
	'Nathan Fredrickson',
	'nathan@silverorange.com'
);

$package->setPhpDep('5.1.5');
$package->setPearinstallerDep('1.4.0');
$package->addPackageDepWithChannel(
	'required',
	'Swat',
	'pear.silverorange.com',
	'1.4.119'
);
$package->generateContents();

if (isset($_GET['make']) || (isset($_SERVER['argv']) && @$_SERVER['argv'][1] == 'make')) {
	$package->writePackageFile();
} else {
	$package->debugPackageFile();
}

?>
