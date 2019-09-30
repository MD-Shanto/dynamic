<form action="<?php echo home_url('/') ?>" method="get">
<input type="search" placeholder="<?php echo esc_attr_x('Search....','placeholder','domainname')?>" class="search-field" value="<?php echo get_search_query() ?>" name="s" />
    <button type="submit" class="btn btn-primary">Search</button>
</form>