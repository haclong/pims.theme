<?php
?>
    <footer class="container clear-float padding10 no-padding-left no-padding-right" >
        <?php if ($secondary_menu): ?>
            <div id="footer-navigation" class="place-right">
                <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('no-margin', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
            </div>
        <?php endif; ?>

        <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
        <?php endif; ?>
        <div class="clearfix"/>
    </footer>
