Yii2-passfield
==============

Passfield widget for Yii2.

Installation
------------

Either run following command:

```bash
$ php composer.phar require --prefer-dist dektrium/yii2-passfield "dev-master"
```

or add

```json
"dektrium/yii2-passfield": "dev-master"
```

to the require section of your `composer.json` file and run following command:

```bash
$ php composer.phar update
```

Usage
-----

If you are using active form you can all the widget as follows:

```php
<?= Passfield::widget([
    'form'      => $form,      // active form instance
    'model'     => $model,     // your model
    'attribute' => 'password', // model attribute name
    'config'    => []          // passfield configuration
]) ?>
```

Or if you are not using active form:

```php
<?= Passfield::widget([
    'name'   => 'password', // the input name
    'config' => []          // passfield configuration
]) ?>
```

License
-------

Yii2-passfield is released under the MIT License. See the bundled [LICENSE.md](LICENSE.md) for details.