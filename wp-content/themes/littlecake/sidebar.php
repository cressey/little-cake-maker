<ul style="list-style: none;">
    <li>
    
        <ul id='navi'>

            
    <?php         
            foreach(get_pages(array('sort_column' => 'menu_order')) as $page) {
                print "<a href='".$page->{'post_name'}."'><li>".$page->{'post_title'}."</li></a>"; 
                //print_r($page);
            }
            
            ?>
        </ul>
    </li>
</ul>

<?php 
            
            if( is_active_sidebar('sidebar-1') ) {
                dynamic_sidebar('sidebar-1');
            }
            ?>