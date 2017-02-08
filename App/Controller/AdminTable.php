<?php

namespace App\Controller;


use App\AdminDataTable;
use App\Models\Article;
use App\View;

class AdminTable
    extends AdminDataTable
{
    protected $view;

    public function __construct(array $data, array $func)
    {
        parent::__construct($data, $func);

        $this->view = new View();
    }

    protected function actionRender()
    {
        $this->view->table = Article::findEach();
        echo $this->view->render(__DIR__ . '/../../template/admin/table.php');

    }

}