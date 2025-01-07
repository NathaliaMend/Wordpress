<?php if( is_active_sidebar('sidebar-blog')):  //testando se existe um item ativo dentro do sidebar ?>
<aside class="sidebar">
    <?php dynamic_sidebar('sidebar-blog') ?>
</aside>
<?php endif;