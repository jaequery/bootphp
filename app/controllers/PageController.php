<?php

class PageController extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

    public function showIndex()
    {
        $this->layout->content = View::make('page.index');
    }

	public function showAbout()
    {
        $this->layout->content = View::make('page.about');
    }

    public function showContact()
    {
        $this->layout->content = View::make('page.contact');
    }


}