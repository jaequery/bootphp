<?php

class DogsController extends BaseController {

	public function __construct(){
		$this->layout = "layouts.bootphp";
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    //
	    $users = User::with("Dog")->get()->toArray();
	    echo '<pre>';
	    print_r($users);

	    $dogs = Dog::with('User')->find(2)->toArray();
	    echo '<pre>';
	    print_r($dogs);
	    exit;
	    $this->layout->content = View::make('dogs.index')
		->with('dogs', Dog::all())
		->with('test', 'testing 123');

	    //	    $this->layout->content = View::make('dogs.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	    $this->layout->content = View::make('dogs.show')
		->with('dog', Dog::find($id))
		->with('test', 'testing 123');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function results()
	{
	    $dogs = Dog::where("name", '=', 'james')->get();
	    $this->layout->content = View::make('dogs.index')
		->with('dogs', $dogs)
		->with('test', 'testing 123');
	    //	    $this->layout->content = View::make('dogs.index');
	}

}