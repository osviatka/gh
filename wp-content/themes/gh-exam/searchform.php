<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <label class="screen-reader-text" for="s">Enter: </label>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="search-input" placeholder="Search">
    <button type="submit" id="searchsubmit">Search</button>
</form>