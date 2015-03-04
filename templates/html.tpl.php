
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    </div>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <?php if (theme_get_setting('stiff_drink_browsersync')): ?>
        <script type='text/javascript' id="__bs_script__">//<![CDATA[
          document.write("<script async src='//HOST:3000/browser-sync/browser-sync-client.2.0.1.js'><\/script>".replace(/HOST/g, location.hostname).replace(/PORT/g, location.port));
        //]]></script>
    <?php endif; ?>
  </body>
</html>
