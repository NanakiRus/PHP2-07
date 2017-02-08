<?php

namespace App\Controller;


use App\AdminDataTable;
use App\Models\Article;

class AdminTable
    extends AdminDataTable
{
    protected function actionRender()
    {
        $this->view->table = Article::findEach();
        echo $this->view->render(__DIR__ . '/../../template/admin/table.php');

    }

}