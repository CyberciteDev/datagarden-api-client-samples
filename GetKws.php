<?php
include "vendor/autoload.php";
include "common.inc.php";

try {
    $datagarden->login();
    $aSite = $datagarden->getSiteInfos($siteId);
    $racId = $aSite['rapports'][0]['id'];
    $racInfos = $datagarden->getRapportInfos($racId);
    $kws = $datagarden->getRapportExpressionsLiees($racId);
    var_dump($kws);
} catch (\Exception $exp) {
    var_dump($exp->getMessage());
}
