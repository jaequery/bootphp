<?php

class BaseController extends Controller {

	public function __construct(){
		$this->layout = 'layouts.default';
		$this->title = 'Bootphp CMS';
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

}