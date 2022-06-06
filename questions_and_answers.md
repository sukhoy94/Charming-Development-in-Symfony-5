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

5. What is twig ? 
```
Twig is a modern template engine for PHP.

Fast: 
Twig compiles templates down to plain optimized PHP code.
 The overhead compared to regular PHP code was reduced to the very minimum.

Secure: 
Twig has a sandbox mode to evaluate untrusted template code. 
This allows Twig to be used as a template language for applications where users may modify the template design.

Flexible: 
Twig is powered by a flexible lexer and parser.
 This allows the developer to define its own custom tags and filters,
  and create its own DSL.
```

6. How to extend twig templates ? 
```
By using %extends% directive and %block%.

For instance we have base.twig.html:

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {% block title %}Document{% endblock %}
    </title>
</head>
<body>

</body>
</html>


And index.twig.html

{% extends 'base.html.twig' %}
{% block title %} New title {% endblock %}


Now index.twig.html will be the same as base.twig.html but with title "New title"
```

7. Global variables in twig
8. What is APP_SECRET env variable and what it is used for ? 
9. How to create database through symfony confole?
