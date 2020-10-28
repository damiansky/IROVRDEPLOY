<?php

namespace app\modules\projects\frontend\controllers;

use luya\web\Controller;
use yii\data\ActiveDataProvider;
use app\modules\projects\models\Projects;

class DefaultController extends Controller
{
    
    public function actionDetail($id = null)
    {
        $model = Projects::findOne($id);

        if (!$model) {
            return $this->goHome();
        }

        return $this->render('detail', [
            'model' => $model
        ]);
    }
}