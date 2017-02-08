<?php

namespace App;

use App\Models\Article;

class AdminTable
    extends AdminDataTable
{
    protected $view;

    public function __construct(array $data, array $func)
    {
        parent::__construct($data, $func);

        $this->view = new View();
    }

    public function tableRender()
    {
        $this->view->arrData = $this->data;
        $this->view->arrFunc = $this->func;
        return $this->view->render(__DIR__ . '/../template/admin/table.php');
    }

}