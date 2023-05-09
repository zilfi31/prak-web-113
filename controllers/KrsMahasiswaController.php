<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionHapusKrs()
    {
        return $this->render('hapus-krs');
    }

}
