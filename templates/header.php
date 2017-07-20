<?php

?>
    <header id="header"class="margin20 no-margin-left no-margin-right">

        <div id="searchbox">
            <?php print render($page['search']); ?>
        </div>
        <div id="sitename">
        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="place-left margin10 no-margin-bottom">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        <?php endif; ?>

        <?php if ($site_name): ?>
            <h1 class="leader">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                <?php if ($site_slogan): ?>
                    <span class="small"><?php print $site_slogan; ?></span>
                <?php endif; ?>
            </h1>
        <?php endif; ?>

        </div>

    <?php if ($main_menu): ?>
          <nav id="navigation">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('horizontal-menu')), 'heading' => t('Main menu'))); ?>
          </nav> <!-- /#navigation -->
    <?php endif; ?>

    </header>
