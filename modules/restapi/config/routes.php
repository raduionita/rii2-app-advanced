<?php
return [
    # yii\web\Controller requires idenitityClass => User
    # host.com/api/v1/products
    'products' => 'restapi/products',
    'users'    => 'restapi/users',
    'orders'   => 'restapi/orders'
];


// /users
// /users/1337
// /users/1337/orders                    : GET POST
// /users/1337/orders/666                : GET PUT PATCH DELETE
// /users/1337/orders/666/products       : select * from products join orders on product.id in orders.product_ids
// /users/1337/orders/666/products/1


// /forum/threads
// /forum/threads/1
// /forum/threads/1/posts
// /forum/threads/1/posts/1
