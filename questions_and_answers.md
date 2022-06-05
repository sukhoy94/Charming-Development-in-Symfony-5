1. Instance of what class is running inside public/index.php ?
```
1a. Kernel class, which is situated in src/Kernel.php
```
2. How to run local server in symfony app?

```
1. By using symfony utility

a) symfony server:start

b) symfony serve

2. by php inbuild server
php -S localhost:9000 -t public
```

3. How to create controller in symfony app

```
symfony make:controller NameController

php bin/console make:controller NameController
```

4. How to see all routes available in application
```
symfony console debug:router
```