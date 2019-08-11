<?php


namespace ishop\base;


abstract class Controller
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $data = [];
    public $meta = [];

    public function __construct(array $route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }

    public function set( array $data)
    {
        $this->data= $data;
    }

    public function setMeta( array $metaData)
    {
        $this->meta = $metaData;
    }
}