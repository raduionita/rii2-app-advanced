Yii/Rii 2 App Advanced Template
===============================

### Install
``` 
$ composer global require "fxp/composer-asset-plugin:^1.2.0"

$ composer install
```

### Console
```
$ ./riic console/test/test # The useless command!
```

### URLs
```
http://hostname/                        # -> frontend (web)
http://hostname/login                   # -> frontend (web)
http://hostname/admin                   # -> backend (web)
http://hostname/api/v1/users            # -> restapi/users/1 (rest)
http://hostname/api/v1/users/1/products # -> restapi/products # (rest sub-resources)
```

### TODO
* WIP: Find a way to link sub-resources: get products belonging to user:1
* REST API module version sub-folders `restapi/v1/` `restapi/v2.2/`
* Improve configs
* A better form widget `common\component\FormWidget`
* Login using a 2 step process(username step & password step) see `AuthController.php`
* Cache warmer!?
* Need a better Module class: that autoloads its config file.
* Remove `console` from `./riic console/test/test`

### NGINX
```
server {
    charset utf-8;
    client_max_body_size 128M;
    sendfile off;
    
    listen 80; ## listen for ipv4
    #listen [::]:80 default_server ipv6only=on; ## listen for ipv6
    
    server_name rii2.app.advanced;
    root        /var/www/rii2.app.advanced/web/; # all folders require +x rights
    index       app.php;
    
    access_log  /var/log/access.rii2.app.advanced.log;
    error_log   /var/log/error.rii2.app.advanced.log;
    
    location / {
        # Redirect everything that isn't a real file to app.php
        try_files $uri $uri/ /app.php$is_args$args;
    }
    
    # uncomment to avoid processing of calls to non-existing static files by Yii
    location ~ \.(js|css|png|jpg|gif|swf|ico|pdf|mov|fla|zip|rar)$ {
        try_files $uri =404;
    }
    error_page 404 /404.html;
    
    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_pass  127.0.0.1:9000; # @see cgi.fix_pathinfo=0 in php.ini
        try_files $uri =404;
    }
    
    location ~ /\.(ht|svn|git) {
        deny all;
    }
}
```
