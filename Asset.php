<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace dektrium\passfield;

use yii\web\AssetBundle;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@dektrium/passfield/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/passfield.min.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/passfield.min.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
