<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Description of journal
 *
 * @author
 */
class Journal extends ActiveRecord
{
    public static function journal()
    {
        return 'journal';
    }
}
