<?php
require __DIR__ . '/config/config.inc.php';
require_once __DIR__ . '/modules/moroannouncementbar/moroannouncementbar.php';

$context = Context::getContext();
if (!$context->language || !Validate::isLoadedObject($context->language)) {
    $context->language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
}
if (!$context->shop || !Validate::isLoadedObject($context->shop)) {
    $context->shop = new Shop((int)Configuration::get('PS_SHOP_DEFAULT'));
}
Shop::setContext(Shop::CONTEXT_SHOP, (int)$context->shop->id);

$mod = Module::getInstanceByName('moroannouncementbar');
if (!$mod) { echo "Module not loaded\n"; exit; }
echo "Module " . $mod->name . " active=" . $mod->active . "\n";

// Directamente en hookDisplayBanner 
echo "--- hookDisplayBanner output ---\n";
$out = $mod->hookDisplayBanner([]);
echo "length=" . strlen($out) . "\n";
echo substr($out, 0, 600) . "\n";
echo "--- end ---\n";
