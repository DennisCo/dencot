<?php

/* ====================
  [BEGIN_COT_EXT]
  Hooks=module
  [END_COT_EXT]
  ==================== */

defined('COT_CODE') or die('Wrong URL.');

$ajax = cot_import("ajax", "G", "INT");


require_once $cfg['system_dir'] . '/header.php';


if (!$m) {
    if (file_exists(cot_incfile("test", "module", "main")))
        include_once cot_incfile("test", "module", "main");
}
else {
    if (file_exists(cot_incfile("test", "module", $m)))
        include_once cot_incfile("test", "module", $m);
}


$t->parse('MAIN');
$t->out('MAIN');

require_once $cfg['system_dir'] . '/footer.php';
