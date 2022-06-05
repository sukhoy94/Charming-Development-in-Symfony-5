# Charming-Development-in-Symfony-5
symfony learning - p1


# check requirements

```

symfony check:requirements

```

# start server

This is the common workflow to serve a Symfony project:

```
cd my-project/
symfony server:start

[OK] Web server listening on http://127.0.0.1:....
```


# Useful Commands

1. run local server 
`php -S 127.0.0.1:8000 -t public`
or 
`symfony serve`
2. dump configs: `php bin/console config:dump twig`
3. cache clear: `php bin/console cache:clear`
4. run migration `php bin/console doctrine:migrations:migrate`


# Add annotations
`composer requeire annotaions`


# console maker

### controller
```
symfony console make:controller NameController
```