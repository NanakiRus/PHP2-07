<?php

namespace App;


abstract class AdminDataTable
    extends Controller
{
    protected $data = [];
    protected $func = [];

    public function __construct(array $data, array $func)
    {
        parent::__construct();
        $this->data = $data;
        $this->func = $func;
    }

}