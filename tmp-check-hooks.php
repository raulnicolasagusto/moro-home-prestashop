<?php
require __DIR__ . '/config/config.inc.php';
$db = Db::getInstance();

// Verify directly in DB
$id = (int)$db->getValue('SELECT id_module FROM ' . _DB_PREFIX_ . 'module WHERE name = "moroannouncementbar"');
echo "id_module: " . $id . "\n";
$hooks = $db->executeS('SELECT hk.name AS hook, hm.position, hm.id_shop FROM ' . _DB_PREFIX_ . 'hook_module hm JOIN ' . _DB_PREFIX_ . 'hook hk ON(hk.id_hook = hm.id_hook) WHERE hm.id_module = ' . $id);
echo "hook_module rows: " . json_encode($hooks) . "\n";

// Now check Hook::getHookModuleExecList AFTER clearing cache
echo "Before cache clean:\n";
$mods = Hook::getHookModuleExecList('displayBanner');
echo "displayBanner list: " . json_encode($mods) . "\n";

// Try to regenerate by cleaning the static cache
$ref = new ReflectionClass('Hook');
$prop = $ref->getProperty('hook_modules_cached');
$prop->setAccessible(true);
$prop->setValue(null, []);
echo "Cleared static cache.\n";

$mods = Hook::getHookModuleExecList('displayBanner');
echo "displayBanner list after clear: " . json_encode($mods) . "\n";
