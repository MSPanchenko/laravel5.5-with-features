<?php

$initialVersion = 1;
$latestVersion = 1;

//TODO if version have 1-20 diapason??? Bad regexp, it want to delete "v" in route param and compare, if >= initial and <= latest
return [
    'version_pattern' => "(v{$initialVersion}|v{$latestVersion})",
    'initial_version' => $initialVersion,
    'latest_version'  => $latestVersion,
];