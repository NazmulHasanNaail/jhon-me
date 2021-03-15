<?php

 function jhon_me_pagination(){
    global $wp_query;

    $links=paginate_links(array(
        'current'=>max(1, get_query_var('paged')),
        'total'=>$wp_query->max_num_pages,
        'type'=>'list'
    ));
    $links =str_replace("page-numbers", "page-link",$links);
    $links =str_replace("<ul class='page-link'>", "<ul class='pagination justify-content-center'>",$links);
    echo $links; 
}