<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')) ?>">
    <div>
        <label class="screen-reader-text" for="s">Pesquisar por:</label>
        <input type="text" value="<?php echo get_search_query();?>" name="s" id="s">
        <input type="submit" id="searchsubmit" value="Pesquisar">
        <!--<input type="hidden" value="post" name="post_type" id="post_type" /> //tira paginas como resultado de pesquisa--> 
    </div>
</form>