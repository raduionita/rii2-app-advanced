Yii2 App Standard Template
==========================

### Install
``` 
$ composer global require "fxp/composer-asset-plugin:^1.2.0"

$ composer install
```

### Console
```
$ ./yiic test/test # The useless command!
```

### URLs
```
http://hostname/                # -> frontend (web)
http://hostname/login           # -> frontend (web)
http://hostname/admin           # -> backend (web)
http://hostname/api/v1/products # -> products (rest)
```

### TODO
* SUpport sub-resources: `/orders/1334/products/213`
* REST API module version sub-folders `restapi/v1/` `restapi/v2.2/`
* Improve configs
* `modules/` to `apps/` but keep only one `web/` folder!?
* A better form widget ``common\component\FormWidget``
* `./yiic` doesn't like `requrest:cookieValidationKey`
* Login using a 2 step process(username step & password step) see `AuthController.php`
* Cache warmer!?
