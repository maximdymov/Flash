# Flash
This is Flash component. It works using $_SESSION.
##How to use
Firstly, you need to start the session:
```php
session_start();
```

First argument in constructor is constant, which sets the type of flash message. The second is the text of message. Constants are defined in `Flash` class.
`display()` function simply shows text of message using `echo`.
```php
$m1 = new Flash(Flash::INFO, "infoMessage");
$m1->display();
```
If you want to use the Bootstrap framework, you can do something like that:
```php
$style = $m1->getType();
$text = $m1->getMessage();
echo "<div class=\"alert alert-$style text-dark\" role=\"alert\">$text</div>";
```
