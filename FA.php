<?php
/**
 * FA.php
 * @author Revin Roman
 * @link http://phptime.ru
 */

namespace rmrevin\yii\fontawesome;

class FA
{

	/**
	 * @param string $name
	 * @param array $options
	 * @return FA\Icon
	 */
	public static function icon($name, $options = [])
	{
		return new FA\Icon($name, $options);
	}

	/**
	 * @param array $options
	 * @return FA\Stack
	 */
	public static function stack($options = [])
	{
		return new FA\Stack($options);
	}

	const SIZE_LARGE = 'lg';
	const SIZE_2X = '2x';
	const SIZE_3X = '3x';
	const SIZE_4X = '4x';
	const SIZE_5X = '5x';

	const ROTATE_90 = 90;
	const ROTATE_180 = 180;
	const ROTATE_270 = 270;

	const FLIP_HORIZONTAL = 'horizontal';
	const FLIP_VERTICAL = 'vertical';
}