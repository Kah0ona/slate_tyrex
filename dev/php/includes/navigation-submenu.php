<?php wp_nav_menu(array(
    'container'=> 'nav',
    'menu' => 'sub-nav',
    'container_class' =>'Navigation',
    'menu_class' => '',
    'theme_location' => 'sub-nav',
    'items_wrap' => '<ul class="Navigation-list">%3$s</ul>',
    'walker' => new Slate_Walker_Nav_Menu()
)); ?>
