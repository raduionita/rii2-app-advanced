Yii2 App Standard Template
==========================

### Install
``` 
composer global require "fxp/composer-asset-plugin:^1.2.0"

composer install
```

### Console
```
./yiic test/test # The useless command!
```

### URLs
```
http://hostname/                # -> frontend (web)
http://hostname/admin           # -> backend (web)
http://hostname/api/v1/products # -> products (rest)
```

### TODO
* Sub-resources: ` /orders/1334/products/213 `
* Improve configs
* `modules/` to `apps/` but keep only one `web/` folder
