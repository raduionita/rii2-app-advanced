<?php

namespace app\modules\common\components;

use yii\widgets\ActiveForm;

class FormWidget extends ActiveForm
{
    public function __toString() : string
    {
        // if FormWidget has begun
        return '<form>';
        // else
        return '</form>';
    }
}