<?php

namespace Silverorange\Autoloader;

$package = new Package('silverorange/less');

$package->addRule(new Rule('', 'Less'));

Autoloader::addPackage($package);

?>
