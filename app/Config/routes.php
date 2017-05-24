<?php
    namespace Library;
    
    return array (
        new Route('default', '/', 'Home'),
        new Route('index', '/', 'Home'),
        new Route('store', '/store', 'Store'),
        new Route('store_bikes', '/store/bikes', 'Bikes'),
        new Route('item_info', '/store/bike/{id}', 'Bikes', 'show', array('id' => '[0-9]+')),
        new Route('cart', '/cart', 'Cart'),
        new Route('cart_clear', '/cart/clear', 'Cart', 'clear'),
        new Route('cart_add', '/cart/{name}/{id}/add', 'Cart', 'add', array('name' => '.+', 'id' => '[0-9]+')),
        new Route('cart_delete', '/cart/{name}/{id}/delete', 'Cart', 'delete', array('name' => '.+', 'id' => '[0-9]+')),
        new Route('contact_us', '/feedback', 'Feedback'),
        new Route('contact_us_proccess', '/feedback/get', 'Feedback', 'proccess'),
        new Route('about', '/about', 'About'),
        new Route('error', '/oops-page', 'Exception')
        );
?>