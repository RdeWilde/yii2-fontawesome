Yii 2 Font Awesome Asset Bundle
===============================

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-fontawesome": "1.1.*"
    }
}
```

Usage
-----
In view
```php
<?
// ...

rmrevin\yii\fontawesome\AssetBundle::register($this);

```

od as dependency in your asset bundle
```php
<?
// ...

class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\rmrevin\yii\fontawesome\AssetBundle'
	];
}

```

Helper
------
```php

use rmrevin\yii\fontawesome\FA;

echo FA::icon('home');
// <i class="fa fa-home"></i>
echo FA::icon('arrow-left', ['class' => 'big', 'data-role' => 'arrow']);
// <i class="big fa fa-arrow-left" data-role="arrow"></i>
echo Html::submitButton(Yii::t('app', '{check} Save', ['check' => FA::icon('check')]));
// <button type="submit"><i class="fa fa-check"></i> Save</button>

echo FA::icon('cog')->inverse();
// <i class="fa fa-cog fa-inverse"></i>
echo FA::icon('cog')->spin();
// <i class="fa fa-cog fa-spin"></i>
echo FA::icon('cog')->fixed_width();
// <i class="fa fa-cog fa-fw"></i>
echo FA::icon('cog')->ul();
// <i class="fa fa-cog fa-ul"></i>
echo FA::icon('cog')->li();
// <i class="fa fa-cog fa-li"></i>
echo FA::icon('cog')->border();
// <i class="fa fa-cog fa-border"></i>
echo FA::icon('cog')->pull_left();
// <i class="fa fa-cog fa-pull_left"></i>
echo FA::icon('cog')->pull_right();
// <i class="fa fa-cog fa-pull_right"></i>
echo FA::icon('cog')->size(FA::SIZE_3X); // values: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X
// <i class="fa fa-cog fa-size-3x"></i>
echo FA::icon('cog')->rotate(FA::ROTATE_90); // values: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_180
// <i class="fa fa-cog fa-rotate-90"></i>
echo FA::icon('cog')->flip(FA::FLIP_VERTICAL); // values: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL
// <i class="fa fa-cog fa-flip-vertical"></i>

echo FA::icon('cog')->spin()->fixed_width()->pull_left()->size(FA::SIZE_LARGE);
// <i class="fa fa-cog fa-spin fa-fw pull-left fa-size-lg"></i>

echo FA::stack()->icon('twitter')->on('square-o');
// <span class="fa-stack">
//   <i class="fa fa-square-o fa-stack-2x"></i>
//   <i class="fa fa-twitter fa-stack-1x"></i>
// </span>

echo FA::stack(['data-role' => 'stacked-icon'])
     ->on((new FA\Icon('square'))->inverse())
     ->icon((new FA\Icon('cog'))->spin());
// <span class="fa-stack" data-role="stacked-icon">
//   <i class="fa fa-square-o fa-inverse fa-stack-2x"></i>
//   <i class="fa fa-cog fa-spin fa-stack-1x"></i>
// </span>
```