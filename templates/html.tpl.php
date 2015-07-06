<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge" />
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head><body class="<?php print $classes; ?>" <?php print $attributes;?>><div class="page">
  <div id="skip-link" class="hide">
    <a href="#content-regions" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</div></body></html>
