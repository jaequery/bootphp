<?php

class ApiController extends BaseController {

    private function respond($params, $code = 200, $msg = 'ok'){
        $res = array(
            "status" => array(
                "code" => $code,
                "msg" => $msg,
            ),
        );
        $res = array_merge($params, $res);
        return Response::json($res);
    }

    public function index()
    {
        return "this is API";
    }

    public function auth()
    {
        $res = array();
        $credentials = array('username' => Input::get('username'), 'password' => Input::get('password'));
        if (Auth::attempt($credentials)){
            if(!Request::ajax()) return Redirect::to('/admin');
            $res = array($credentials);
            return $this->respond($res, 200, 'logged in');
        }else{
            if(!Request::ajax()) return Redirect::to('/admin');
            return $this->respond($res, 404, 'user not found');
        }
        
        
    }

}