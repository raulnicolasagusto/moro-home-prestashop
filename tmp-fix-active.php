<?php
require __DIR__ . '/config/config.inc.php';
$db = Db::getInstance();
// Set active=1 explicitly
$db->execute('UPDATE ' . _DB_PREFIX_ . 'module SET active = 1 WHERE name = "moroannouncementbar"');
$row = $db->getRow('SELECT id_module, name, active FROM ' . _DB_PREFIX_ . 'module WHERE name = "moroannouncementbar"');
echo "module now: " . json_encode($row) . "\n";

// Hook registration sanity-check
$id = (int)$row['id_module'];
$hooks = $db->executeS('SELECT hk.name AS hook, hm.position, hm.id_shop FROM ' . _DB_PREFIX_ . 'hook_module hm JOIN ' . _DB_PREFIX_ . 'hook hk ON(hk.id_hook = hm.id_hook) WHERE hm.id_module = ' . $id);
echo "hooks: " . json_encode($hooks) . "\n";

// Shops available
$shops = $db->executeS('SELECT id_shop, name FROM ' . _DB_PREFIX_ . 'shop');
echo "shops: " . json_encode($shops) . "\n";
