<?php

/**
 * @file
 * Implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in page.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 * @see bartik_process_maintenance_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <div id="page-wrapper" class="container margin20">

    <header id="header" class="margin20 no-margin-left no-margin-right">

        <div id="sitename">
      <?php if ($logo): ?>
        <span class="place-left margin10 no-margin-bottom">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </span>
      <?php endif; ?>

          <?php if ($site_name): ?>
            <h1 class="leader">
                <span class="fg-blue"><?php print $site_name; ?></span>
                <?php if ($site_slogan): ?>
                    <span class="small"><?php print $site_slogan; ?></span>
                <?php endif; ?>
            </h1>
          <?php endif; ?>

        </div>

    </header>

    <main class="clear-float margin50 no-margin-left no-margin-right no-margin-bottom bg-amber">

            <?php print $messages; ?>
                
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h2 class="title fg-darkCobalt" id="page-title"><?php print $title; ?> <span class="mif-chevron-right"/></h2><?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print render($page['help']); ?>
            <?php print render($content); ?>

    </main>

</body>
</html>
