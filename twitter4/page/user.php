<?php

class page_user extends Page {

    public $title='User';

    function init() {
        parent::init();

        $this->setModel('User')->load($this->app->stickyGET('id'));

        $g = $this->add('Grid');
        $g->setModel($this->model->ref('Tweet'))->setOrder('date desc')->setLimit(20)->debug();

    }
}
