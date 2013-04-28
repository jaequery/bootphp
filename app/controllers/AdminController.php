<?php

class AdminController extends BaseController {

    public function __construct(){
        parent::__construct();
        $this->layout = 'layouts.admin';
        $this->title = "Bootphp | Admin";

    }

    public function index()
    {
        if(Auth::guest()){
            $this->layout->redir = Session::get('redir');    
        }else{
            return Redirect::to('/admin/dashboard');
        }
        $this->layout->content = View::make('admin.index');
    }

    public function dashboard()
    {
        $this->layout->content = View::make('admin.dashboard');
    }

    public function login()
    {
        $this->layout->content = View::make('admin.login');
    }

    public function users()
    {
        $params['users'] = User::orderBy('id', 'desc')->paginate();
        $this->layout->content = View::make('admin.users')->with($params);
    }

    public function user($id = 'new')
    {
        if($id == 'new'){
            $params['user'] = array();
        }else{
            $params['user'] = User::find($id);
        }
        
        $this->layout->content = View::make('admin.user')->with($params);
    }
    
    public function posts(){
        $params['posts'] = Post::orderBy('id', 'desc')->get();
        $this->layout->content = View::make('admin.posts')->with($params);
    }
    
    public function post($id){
        $params['post'] = Post::find($id);
        $this->layout->content = View::make('admin.post')->with($params);
    }

}