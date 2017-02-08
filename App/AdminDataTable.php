<?php

namespace App;


abstract class AdminDataTable
{
    protected $data = [];
    protected $func = [];

    public function __construct(array $data, array $func)
    {
        $this->data = $data;
        $this->func = $func;
    }

}