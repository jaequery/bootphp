<?php

class BaseController extends Controller {

    public function __construct(){
	$this->layout = 'layouts.default';
	$this->title = 'Bootphp CMS';
	$this->params = array();
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    public function setupLayout()
    {
	$this->layout = View::make($this->layout);
	$this->layout->title = $this->title;
    }


    /**
     * Sets var to view
     */
    public function set($key, $value){
	$this->params[$key] = $value;
    }

  }
