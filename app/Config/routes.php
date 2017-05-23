<?php
    namespace Library;
    
    return array (
        new Route('default', '//*', 'Home'),
        new Route('index', '//*', 'Home'),
        new Route('store', '/store/*', 'Store'),
        new Route('store', '/store/bikes/*', 'Bikes'),
        new Route('item_info', '/store/bike/{id}/*', 'Bikes', 'show', array('id' => '[0-9]+')),
        new Route('contact_us', '/feedback/*', 'Feedback'),
        new Route('about', '/about/*', 'About'),
        new Route('error', '/oops-page/*', 'Exception')
        );
?>