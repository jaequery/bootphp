<?php

class AdminController extends BaseController {

    public function __construct(){
        parent::__construct();
        $this->layout = 'layouts.admin';
        $this->title = "Bootphp | Admin";
    }

    public function showIndex()
    {
        $this->layout->content = View::make('admin.index');
    }

    public function showDashboard()
    {
        $this->layout->content = View::make('admin.dashboard');
    }

    public function showLogin()
    {
        $this->layout->content = View::make('admin.login');
    }

    public function showUsers()
    {
        $params['users'] = User::orderBy('id', 'desc')->get();
        $this->layout->content = View::make('admin.users')->with($params);
    }

    public function showUser($id)
    {
        $params['user'] = User::find($id);
        $this->layout->content = View::make('admin.user')->with($params);
    }

}