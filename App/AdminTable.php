<?php

namespace App;

class AdminTable
    extends AdminDataTable
{
    public $view;

    public function __construct(array $data, array $func)
    {
        parent::__construct($data, $func);

        $this->view = new View();
        $this->view->arrData = $this->data[0];
        $this->view->arrFunc = $this->func;
    }

}