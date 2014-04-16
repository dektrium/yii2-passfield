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

use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Pass*Field widget.
 * @see http://antelle.github.io/passfield/
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Passfield extends InputWidget
{
    /**
     * @var \yii\widgets\ActiveForm
     */
    public $form;

    /**
     * @var array Passfield options
     */
    public $config = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        Asset::register($this->view);
        $config = empty($this->config) ? json_encode(['locale' => \Yii::$app->language]) : json_encode($this->config);
        $this->view->registerJs(sprintf('$("#%s").passField(%s)', $this->options['id'], $config));
        if ($this->hasModel()) {
            if ($this->form == null) {
                throw new InvalidConfigException(__CLASS__ . '.form property must be specified');
            }
            return $this->form->field($this->model, $this->attribute)->passwordInput($this->options);
        } else {
            return Html::passwordInput($this->name, $this->value, $this->options);
        }
    }
}