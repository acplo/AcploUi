# AcploUi 
[![Latest Stable Version](https://poser.pugx.org/acplo/acploui/v/stable)](https://packagist.org/packages/acplo/acploui) [![Total Downloads](https://poser.pugx.org/acplo/acploui/downloads)](https://packagist.org/packages/acplo/acploui) [![Latest Unstable Version](https://poser.pugx.org/acplo/acploui/v/unstable)](https://packagist.org/packages/acplo/acploui) [![License](https://poser.pugx.org/acplo/acploui/license)](https://packagist.org/packages/acplo/acploui)


## Introduction
This module provides a shortcut to several UI resources from some of the best front frameworks. 
I will add more libraries with time and add more resources to the current ones.

- Jquery: 2.1.3 [jquery.com](http://jquery.com)
- Bootstrap: 3.3.4 [getbootstrap.com](http://getbootstrap.com)
- Font Awesome: 4.3.0 [fortawesome.github.io](http://fortawesome.github.io/Font-Awesome/) 
- Chosen: 1.4.1 [http://harvesthq.github.io/chosen/](http://harvesthq.github.io/chosen/)
- MomentJs: 2.9.0 [http://momentjs.com](http://momentjs.com)

The ideia is to facilitate the front development. You do not need to worry about download individually each library, control their versions, so on. Refer to the Usage bellow.

## Requirements
- PHP 5.4 or greater
- Zend Framework 2 [framework.zend.com](http://framework.zend.com/).
- AssetManager from rwoverdijk [rwoverdijk/assetmanager](https://github.com/RWOverdijk/AssetManager)
- Any library above

## Instalation
Instalation can be done with composer ou manually

### Installation with composer
For composer documentation, please refer to [getcomposer.org](http://getcomposer.org/).

  1. Enter your project directory
  2. Create or edit your `composer.json` file with following contents:

     ```json
     {
         "minimum-stability": "dev",
         "require": {
             "acplo/acploui": "1.*"
         }
     }
     ```
  3. Run `php composer.phar install`
  4. Open `my/project/directory/config/application.config.php` and add `AcploUi` to your `modules`
     
### Installation without composer

  1. Clone this module [AcploUi](http://github.com/Acplo/AcploUi) to your vendor directory
  2. Enable it in your config/application.config.php like the step 4 in the previous section.
  
## Usage
This module provides two main View Helpers: LosHeadLink and LosHeadScript. You can safely replace the default ZF HeadLink and HeadScript with this ones to use their resources.

### Jquery
Jquery is provided as local files (default) or with CDN. Just pass "true" to the appendJquery method to use the CDN files.
The second argument indicates the use of minified version (default) or not, while the third indicates a specific version of a CDN file.
  
Just add the following to your layout.phtml file:
```php
<?php
//Will use the local minified version  
echo $this->acploHeadScript()->appendJquery();

//Will use the CDN version  
echo $this->acploHeadScript()->appendJquery(true);
 
//Will use the 2.1.0 unminified CDN version  
echo $this->acploHeadScript()->appendJquery(true, false, '2.1.0'); 
?>
```

It will generate the following html:
```html
<script src="/jquery/dist/jquery.min.js" type="text/javascript"></script>
``` 

### Font Awesome
Font Awesome is provided as local files (default) or with CDN. Just pass "true" to the appendFontAwesome method to use the CDN files.
The second argument indicates the use of minified version (default) or not, while the third indicates a specific version of a CDN file.

Include the stylesheet with:
```php
<?php 
//Will use the local minified version
echo $this->acploHeadLink()->appendFontAwesome();

//Will use the minified CDN version
echo $this->acploHeadLink()->appendFontAwesome(true);
 
//Will use the 4.2.0 unminified CDN version  
echo $this->acploHeadLink()->appendFontAwesome(true, false, '4.2.0');
?>
```

The last call will generate the following html:
```html
<link type="text/css" rel="stylesheet" media="screen" href="/fontawesome/css/font-awesome.min.css">
``` 

To use their icon is simple, just use the LosIcon View Helper:
```php
<?= $this->acploIcon('fa-user') ?>
```
Will generate:
```html
<span class="fa fa-user"></span>
```

You can pass a second parameter to add any style:
```php
<?= $this->acploIcon('fa-user', 'margin-right:4px;float:none') ?>
```
Will generate:
```html
<span class="fa fa-user" style="margin-right:4px;float:none"></span>
```

If you need to add a class, pass it along with the icon:
```php
<?= $this->acploIcon('fa-user pull-right') ?>
```
Will generate:
```html
<span class="fa fa-user pull-right"></span>
```

You can even call and icon as a method:
```php
<?= $this->acploIcon()->FaUser() ?>
```

You can use icons with the "i" tag for both glyphicon and fontawesome:
```php
<?= $this->acploIcon('fa-user','',true) ?>
```
Will generate:
```html
<i class="fa fa-user"></i>
```
 

### Chosen
If you do not provide an element as the first parameter, the module will assume "select" and will apply the Chosen for all "select" elements.
You can pass the Chosen attributes as an array (either as the first or second parameter).
```php
<script>
<?= $this->acploChosen() ?>
<?= $this->acploChosen('#my_select') ?>
<?= $this->acploChosen('#my_select',['disable_search_threshold'=>10]) ?>
<?= $this->acploChosen(['disable_search_threshold'=>10]) ?>
</script>
```

It is not mandatory that you include the stylesheet and script beforehand. If you call the view helper as above, the module will include both for you as minified versions.
To disabled this behavior, pass false as last parameter:
```php
<script>
<?= $this->acploChosen(false) ?>
<?= $this->acploChosen('#my_select', false) ?>
<?= $this->acploChosen('#my_select',['disable_search_threshold'=>10], false) ?>
<?= $this->acploChosen(['disable_search_threshold'=>10], false) ?>
</script>
```


To manually include the stylesheet and script (can use append or prepend)
```php
<?php echo $this->acploHeadLink()->appendChosen() ?>
<?php echo $this->acploHeadScript()->appendChosen() ?>
```

It will generate the following html:
```html
<link type="text/css" rel="stylesheet" media="screen" href="/chosen/chosen.min.css">
<script src="/chosen/chosen.jquery.min.js" type="text/javascript"></script>
``` 

Again, you can use the false parameter to get the default file:
```html
<link type="text/css" rel="stylesheet" media="screen" href="/chosen/chosen.css">
<script src="/chosen/chosen.jquery.js" type="text/javascript"></script>
```

UPDATE: Starting from version 1.0.19, you can style the Chosen element with Bootstrap 3. Just pass a true as fourth parameter:
<?= $this->acploChosen('#my_select',['disable_search_threshold'=>10], true, true) ?>

Or ou can manually include the necessary styles with:
<?php echo $this->acploHeadLink()->appendChosenBootstrap() ?>

### Moment
To include the script (can use append or prepend)
```php
<?php echo $this->acploHeadScript()->appendMoment() ?>
```

It will generate the following html:
```html
<script src="/moment/min/moment.min.js" type="text/javascript"></script>
``` 

Again, you can use the false parameter to get the default file:
```html
<script src="/moment/moment.js" type="text/javascript"></script>
```

You can specify which translations to add by passing and array to the appendMoment:
```php
<?php echo $this->acploHeadScript()->appendMoment(['pt-br','en']) ?>
```

It will generate the following html:
```html
<script src="/moment/min/moment.min.js" type="text/javascript"></script>
<script src="/moment/min/locale/pt-br.min.js" type="text/javascript"></script>
<script src="/moment/min/locale/en.min.js" type="text/javascript"></script>
``` 

You can combine with the unminified version:
```php
<?php echo $this->acploHeadScript()->appendMoment(['pt-br','en'],false) ?>
```

It will generate the following html:
```html
<script src="/moment/moment.js" type="text/javascript"></script>
<script src="/moment/locale/pt-br.js" type="text/javascript"></script>
<script src="/moment/locale/en.js" type="text/javascript"></script>
```

You can add all languages using one minified file:
```php
<?php echo $this->acploHeadScript()->appendMoment(['*']) ?>
```

It will generate the following html:
```html
<script src="/moment/min/moment-with-locales.min.js" type="text/javascript"></script>
```

### Bootstrap
Bootstrap is provided as local files (default) or with CDN. Just pass "true" to the appendBootstrap method to use the CDN files.
The second argument indicates the use of minified version (default) or not, while the third indicates a specific version of a CDN file.

Include the stylesheet with (can use append or prepend)
```php
<?php 
//Will use the minified local version
echo $this->acploHeadLink()->appendBootstrap();
echo $this->acploHeadScript()->appendBootstrap();

//Will use the minified CDN version
echo $this->acploHeadLink()->appendBootstrap(true);
echo $this->acploHeadScript()->appendBootstrap(true);  

//Will use the 3.3.1 unminified CDN version  
echo $this->acploHeadLink()->appendBootstrap(true, false, '3.3.1');
echo $this->acploHeadScript()->appendBootstrap(true, false, '3.3.1');
?>
```

The first call will generate the following html:
```html
<link type="text/css" rel="stylesheet" media="screen" href="/bootstrap/dist/css/bootstrap.min.css">
<script src="/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
``` 

For each section bellow, please refer to the [bootstrap documentation](http://getbootstrap.com) for the classes specifications.

#### Forms
This module provides a Form View Helper that automatically adds bootstrap style to forms. Just use the default form but with the new view helper: 
```php
<?= $this->acploForm($form) ?>
```

To make the form [horizontal](http://getbootstrap.com/css/#forms-horizontal), just pass true in the second argument, 
and the number of columns the label will use (default is 2):
```php
<?= $this->acploForm($form, true) ?>
<?= $this->acploForm($form, true, 4) ?>
```

In the horizontal form, buttons and checkboxes will be aligned with the other fields, not using the label column.
To better style checkboxes and radios, add the following to your stylesheet:
```css
.radio label, .checkbox label {
    padding-right: 20px;
}
```

There is a AcploFormRow view helper that prints just a row. It will add all necessary classes, including alerts for form errors.
```php
<?= $this->acploFormRow($form->get('password') ?>
```
 
If you need to change the order of the form elements, you can do (example for horizontal form with 4 columns for labels):
```php
echo $this->acploForm()->openTag($form, true);
foreach (['name','gender','email','password','passwordVerify','captcha','newsletter','submit'] as $element) {
    echo $this->acploFormRow()->render($form->get($element), true, 4);
}
echo $this->acploForm()->closeTag();
```

#### Alert
```php
<?= $this->acploAlert('test') ?>
<?= $this->acploAlert('<strong>Warning</strong> Testing...') ?>
```

The default alert uses the warning style without the cacploe icon (X). But you can use any alert:
```php
<?= $this->acploAlert()->success('test') ?>
<?= $this->acploAlert()->info('test') ?>
<?= $this->acploAlert()->warning('test') ?>
<?= $this->acploAlert()->danger('test') ?>
```

If you want the dismissible alert just call:
```php
<?= $this->acploAlert()->setDismissible(true)->success('test') ?>
```

#### Badge
```php
<?= $this->acploBadge('2') ?>
```

#### Button
```php
<?= $this->acploButton('Test') ?>
<?= $this->acploButton('Test','primary') ?>
<?= $this->acploButton('Test','danger','margin-right:10px;') ?>
<?= $this->acploButton()->setDefault('Test') ?>
<?= $this->acploButton()->primary('Test') ?>
<?= $this->acploButton()->success('Test') ?>
<?= $this->acploButton()->info('Test') ?>
<?= $this->acploButton()->warning('Test') ?>
<?= $this->acploButton()->danger('Test') ?>
<?= $this->acploButton()->link('Test') ?>
<?= $this->acploButton()->primary('Test','margin-right:10px;') ?>
<?= $this->acploButton()->setId('testid')->primary('Test') ?>
<?= $this->acploButton()->setName('testname')->primary('Test') ?>
<?= $this->acploButton()->setLarge()->primary('Test') ?>
<?= $this->acploButton()->setSmall()->primary('Test') ?>
<?= $this->acploButton()->setExtraSmall()->primary('Test') ?>
<?= $this->acploButton()->isActive()->primary('Test') ?>
<?= $this->acploButton()->isBlock()->danger('Test') ?>
<?= $this->acploButton()->isDisabled()->info('Test') ?>
<?= $this->acploButton()->setId('testid')->setName('testname')->isDisabled()->isBlock()->info('Test') ?>
```

#### Icons
To use their icon is simple, just use the LosIcon View Helper:
```php
<?= $this->acploIcon('glyphicon-user') ?>
```
Will generate:
```html
<span class="glyphicon glyphicon-user"></span>
```

You can pass a second parameter to add any style:
```php
<?= $this->acploIcon('glyphicon-user', 'margin-right:4px;float:none') ?>
```
Will generate:
```html
<span class="glyphicon glyphicon-user" style="margin-right:4px;float:none"></span>
```

If you need to add a class, pass it along with the icon:
```php
<?= $this->acploIcon('glyphicon-user pull-right') ?>
```
Will generate:
```html
<span class="glyphicon glyphicon-user pull-right"></span>
```

You can even call and icon as a method:
```php
<?= $this->acploIcon()->GlyphiconUser() ?>
```

#### Image
```php
<?php echo $this->acploImage('/images/logo.png') ?>
<?php echo $this->acploImage()->circle('/images/logo.png') ?>
<?php echo $this->acploImage()->rounded('/images/logo.png') ?>
<?php echo $this->acploImage()->thumbnail('/images/logo.png') ?>
```

As default, the image receives a img-responsive class. To remove it, call:
```php
<?php echo $this->acploImage('/images/logo.png')->setResponsive(false) ?>
```

#### Label
```php
<?= $this->acploLabel('test') ?>
<?= $this->acploLabel()->default('test') ?>
<?= $this->acploLabel()->primary('test') ?>
<?= $this->acploLabel()->success('test') ?>
<?= $this->acploLabel()->info('test') ?>
<?= $this->acploLabel()->warning('test') ?>
<?= $this->acploLabel()->danger('test') ?>
```

The first call, will use the "default" style.

#### Navigation
For now, there is two Navigation View Helpers: Breadcrumbs and Menu. 

```php
<?= $this->acploNavigation('Navigation')->menu()?>
<?= $this->acploNavigation('Navigation')->breadcrumbs()?>
```

The menu helper will use the "navbar" style form bootstrap, using the first level as navbar links 
and submenus as dropdown as in [Bootstrap Navbar](http://getbootstrap.com/components/#navbar-default).

There is a new Page type that enable you to add a divider to the menu helper:
```php
'navigation' => [
    'default' => [
        'crud' => [
            'pages' => [
                [
                    'label' => 'Client',
                    'route' => 'client',
                    'pages' => [
                        [
                            'label' => 'Edit Client',
                            'route' => 'client/edit',
                        ],
                        [
                    		'type' => 'AcploUi\Navigation\Page\Divider'
                 		],
                  		[
                            'label' => 'Remove Client',
                            'route' => 'client/remove',
                        ],
                    ]
                ]
            ]
        ]
    ]
]
``` 

The breadcrumbs helper will follow [Breadcrumbs](http://getbootstrap.com/components/#breadcrumbs).

If you define a page of type URI with just a '#' href, the breadcrumbs will print just it's label and not a link. 
Very useful if you have a category not linked to a route.

#### Paginator
You can use the Paginator View Helper to style as [Default Paginator](http://getbootstrap.com/components/#pagination-default) or
[Pager](http://getbootstrap.com/components/#pagination-pager).

The default helper will use the 'Sliding' scroll system, and the 'default paginator' from bootstrap. To change this behavior, just
use the second argument to the scroll system, null as the third (will use this lib view file). 

```php
<?= $this->acploPaginationControl($this->paginator); ?>
<?= $this->acploPaginationControl($this->paginator, 'All'); ?>
<?= $this->acploPaginationControl($this->paginator, 'Elastic'); ?>
<?= $this->acploPaginationControl($this->paginator, 'Jumping'); ?>
<?= $this->acploPaginationControl($this->paginator, 'Sliding'); ?>
<?= $this->acploPaginationControl($this->paginator, 'Sliding', null, ['type' => 'pager','aligned'=>false,'nextLabel'=>'Próximo']); ?>
``` 

The following options are available in the fourth parameter:
- 'type': 'pager'. If specified as pager, will use the Pager. If omited, will use the Default Paginator.
- 'aligned': true (default) or false. Will use the aligned version of the pager.
- 'size': 'sm' or 'lg'. Use the small or large, respectively.
- 'nextLabel': the label for the 'Next' buttton. Can be combined with glyphicon or FontAwesome.
- 'previousLabel': the same as nextLabel, but for the 'Previous' button.

#### Well
```php
<?= $this->acploWell('test') ?>
<?= $this->acploWell()->small('test') ?>
<?= $this->acploWell()->large('test') ?>
```
