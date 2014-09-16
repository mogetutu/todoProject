<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 $todo = Todo::all();
        
        return View::make('users.show', compact('task'));

		//return View::make('users.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			
		return View::make('users.create');
			$user = new User;
			$user->username = "ab";
			$user->password = Hash::password('pass');
			$user->save();

			

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Capture Form Data
		$payload    = Input::except('_token');
		// Validate data and return errors if any
		$validation = Validator::make($payload, User::$rules);


		if ($validation->fails()) 
		{
				return Redirect::to('users/create')
					->withErrors($validation) // send back all errors to the login form
					->withInput(Input::except('password'));
		}
		else
		    {
				// Redirect the user back to the form and show them the errors made
			    
			    $user = new User;
			    $user->username = Input::get('username');
				$user->password = Hash::make(Input::get('password'));
				$user->save();
				return Redirect::to('users/show');
			}
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
		$user = User::find($id);
		return View::make('users.show',compact('user'));

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
		return View::make('users.update');
	}

	// public function login()
	// {
	// 	return View::make('users.index');
	// }



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


}
