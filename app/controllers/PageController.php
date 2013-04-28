<?php

class PageController extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->layout->content = View::make('page.index');
    }

	public function about()
    {
        $this->layout->content = View::make('page.about');
    }

    public function contact()
    {
        $this->layout->content = View::make('page.contact');
    }


}