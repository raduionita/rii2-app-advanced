<?php

namespace restapi\controllers;

use \rii\rest\Controller;
use \rii\rest\Output;

class ProductsController extends Controller
{
    public function actionView(int $id) # get/head => products/<id>
    {
        return $this->asJson(new Output(200, ['resource' => 'products', 'id' => $id]));
    }

    public function actionIndex() # get/head => products
    {
        $parent = $this->getParent(); // Output instance
        return $this->asJson(new Output(200, [['resource' => 'products', 'id' => 8]]));
    }

    public function actionCreate() # post => products
    {
        return $this->asJson(['controller' => 'products', 'action' => 'create']);
    }

    public function actionUpdate(int $id) # put/patch => products/<id>
    {
        return $this->asJson(['resource' => 'products', 'id' => $id]);
    }

    public function actionDelete(int $id) # delete => products/<id>
    {
        return $this->asJson(['resource' => 'products', 'id' => $id]);
    }

    public function actionOptions() # verb => users/<id> OR verb => users
    {
        return $this->asJson(['resource' => 'products']);
    }
}


// 1:n
// /users/1337/orders/66/products
// /users/1337/orders/66/products/2016
// select p.*
// from products p
// left join users u on (u.uid = o.uid)
// left join orders o on (o.oid = c.oid)
// left join carts c on (c.cid = l.cid)
// left join lines l on (l.pid = p.pid)

// 1:1
// /forums/1/posts
// /forums/1/posts/134
// /forums/1/threads/9/posts
// /forums/1/threads/9/posts/312
// select p.*
// from posts p
// left join forums f on (f.fid = t.fid);
// left join threads t on (t.tid = p.tid)


// request: /users/1337/orders/66/products?fields=id,name&filter[created]=yesterday&sort=+id&offset=1998&limit=2
// resonse: {
//    code: 200,
//    meta: {
//      parents: [
//        users/1337: { // users/1337
//          id: 1337
//        },
//        orders/66: {  // orders/66
//          id: 66
//        }
//      ],
//      total: 2000,
//      limit: 2,
//      offset: 1998,
//      fields: [id, name]
//      filter: {created: yesterday} OR [{field: created, value: yesterday, eval: eq}, {OR}]
//      sort: +id
//    },
//    data: [{
//      id: 3,
//      name: Dumb product
//    },{
//      id: 5,
//      name: Another product
//    }]
// }
