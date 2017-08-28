<?php
// Meta data
$dscanDataAll = \unserialize(\get_post_meta(\get_the_ID(), 'eve-intel-tool_dscan-all', true));
$dscanDataOnGrid = \unserialize(\get_post_meta(\get_the_ID(), 'eve-intel-tool_dscan-onGrid', true));
$dscanDataOffGrid = \unserialize(\get_post_meta(\get_the_ID(), 'eve-intel-tool_dscan-offGrid', true));
$dscanDataShipTypes = \unserialize(\get_post_meta(\get_the_ID(), 'eve-intel-tool_dscan-shipTypes', true));
$dscanDataSystem = \unserialize(\get_post_meta(\get_the_ID(), 'eve-intel-tool_dscan-system', true));
$dscanDataTime = \get_post_meta(\get_the_ID(), 'eve-intel-tool_dscan-time', true);

// Counter
$countAll = (!empty($dscanDataAll['count'])) ? $dscanDataAll['count'] : 0;
$countOnGrid = (!empty($dscanDataOnGrid['count'])) ? $dscanDataOnGrid['count'] : 0;
$countOffGrid = (!empty($dscanDataOffGrid['count'])) ? $dscanDataOffGrid['count'] : 0;

$jsonData = [
	'dscanAll' => $dscanDataAll,
	'dscanOngrid' => $dscanDataOnGrid,
	'dscanOffgrid' => $dscanDataOffGrid,
	'dscanShipTypes' => $dscanDataShipTypes,
	'dscanSystemInformation' => $dscanDataSystem,
	'dscanEveTime' => $dscanDataTime
];

echo \json_encode($jsonData);

// Always exit the API route, so it doesn't load the actual page
exit;
