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
        return "this is API";
    }

    public function auth()
    {
        $credentials = array('username' => Input::get('username'), 'password' => Input::get('password'));
        $auth = Auth::attempt($credentials);
        $res = array('auth' => $auth);
        if ($auth){
            //if(!Request::ajax()) return Redirect::to('/admin');
            return $this->respond($res, 200, 'logged in');
        }else{
            //if(!Request::ajax()) return Redirect::to('/admin');
            return $this->respond($res, 404, 'user not found');
        }
        
        
    }

}