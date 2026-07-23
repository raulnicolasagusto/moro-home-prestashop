<?php
require __DIR__ . '/config/config.inc.php';

$db = Db::getInstance();

$id = (int)$db->getValue("SELECT id_module FROM " . _DB_PREFIX_ . "module WHERE name='moroannouncementbar'");
echo "module id=$id active=" . (int)$db->getValue("SELECT active FROM " . _DB_PREFIX_ . "module WHERE id_module=$id") . "\n";

$hook_id = (int)$db->getValue("SELECT id_hook FROM " . _DB_PREFIX_ . "hook WHERE name='displayBanner'");
echo "displayBanner id_hook=$hook_id\n";

$hm = $db->executeS("SELECT * FROM " . _DB_PREFIX_ . "hook_module WHERE id_hook=$hook_id AND id_module=$id AND id_shop=1");
echo "hook_module: " . json_encode($hm) . "\n";

$all_modules_hooked = $db->executeS("SELECT m.name, hm.position, hm.id_hook FROM " . _DB_PREFIX_ . "hook_module hm JOIN " . _DB_PREFIX_ . "module m ON(m.id_module=hm.id_module) WHERE hm.id_hook=$hook_id AND hm.id_shop=1");
echo "ALL modules hooked to displayBanner: " . json_encode($all_modules_hooked) . "\n";

echo "DIRECT hooks table (hook_module) details:\n";
foreach ($all_modules_hooked as $row) {
    echo "  module={$row['name']} position={$row['position']} id_hook={$row['id_hook']}\n";
}
