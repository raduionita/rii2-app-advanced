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
* Support sub-resources: `/orders/1334/products/213`
* REST API module version sub-folders `restapi/v1/` `restapi/v2.2/`
* Improve configs
* A better form widget `common\component\FormWidget`
* Login using a 2 step process(username step & password step) see `AuthController.php`
* Cache warmer!?
* Move `common/db` to an external vendor bundle `raducorp/yii-common`
* Need a better Application class: that doesn't require 2 main config files.
* Need a better Module class: that autoloads its config file.