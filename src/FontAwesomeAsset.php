<?php

/**
 * @copyright Copyright (c) Roman Korolov, 2015
 * @link https://github.com/rokorolov/yii2-fontawesome-asset
 * @license http://opensource.org/licenses/BSD-3-Clause
 * @version 1.0.0
 */

namespace rokorolov\fontawesome;

/**
 * FontAwesomeAsset is a bundle for iconic font and CSS framework - Font Awesome.
 *
 * @author Roman Korolov <rokorolov@gmail.com>
 */
class FontAwesomeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/fontawesome';
    public $css = [
        'css/font-awesome.css'
    ];
}
