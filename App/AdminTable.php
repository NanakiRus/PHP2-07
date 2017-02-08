<?php

namespace App;

use App\Models\Article;

class AdminTable
    extends AdminDataTable
{
    public $view;

    public function __construct(array $data, array $func)
    {
        parent::__construct($data, $func);

        $this->view = new View();
        $this->view->arrData = $this->data;
        $this->view->arrFunc = $this->func;
    }

}