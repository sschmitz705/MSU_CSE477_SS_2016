<?php

namespace model;


class View{
    private $model;
    public function __construct(Model $model) {
        $this->model = $model;
    }
    public function parts($pl) {
        return $html;
    }
    public function buttons() {
        return $html;
    }
    public function player($pl) {
        return $html;
    }
    public function model($pl) {
        return $html;
    }
}
