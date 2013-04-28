<?php

class ApiController extends BaseController {

    private function respond($res = array(), $code = 200, $msg = 'ok'){
        $res = array_merge($res, array(
            "status" => array(
                "code" => $code,
                "msg" => $msg,
            ),
        ));
        return Response::json($res);
    }

    public function index()
    {
        return "admin / " . Hash::make('demo');
    }

    public function login()
    {
        $credentials = array('username' => Input::get('username'), 'password' => Input::get('password'));
        $auth = Auth::attempt($credentials);
        $res = array('auth' => $auth);

        if ($auth){
            if(!Request::ajax()){
                // class = ['alert-info', 'alert-success', 'alert-error', '']
                return Redirect::to('/admin/dashboard')->with('flash', array("message" => "You have now logged in", "class" => "alert-success"));
            }
            return $this->respond($res, 200, 'logged in');
        }else{
            if(!Request::ajax()){ 
                return Redirect::to('/admin')->with('flash', array("message" => "Invalid username or password, please try again", "class" => "alert-error"));
            }
            return $this->respond($res, 404, 'user not found');
        }
    }
    
    public function logout(){
        $logout = Auth::logout();
        if(!Request::ajax()) return Redirect::to('/admin')->with('flash', array("message" => "You have logged out", "class" => "alert"));
        return $this->respond( array($logout), 200, 'logged out');
    }
    
    public function data(){
        $model = Input::get('model');
        $cmd = Input::get('cmd','save');
        $data = Input::get('data');
        
        switch($cmd){
            case 'insert':
                $model_obj = new $model;
                foreach($data as $key=>$value){
                    $model_obj->$key = $value;
                }
                $model_obj->save();
            case 'update':
                $model_obj = $model::find($data['id']);
                
                foreach($data as $key=>$value){
                    $model_obj->$key = $value;
                }
                $model_obj->save();
            break;
            case 'delete':
                $model_obj = $model::find($data['id']);
                $model_obj->delete();
            break;
            default:
                $model_obj = false;
            break;
        }
        return $this->respond( array('res'=>$model_obj), 200);
    }

    public function flash(){
        $flash = Session::get('flash', '');
        return $this->respond( array('flash'=>$flash), 200);
    }

}