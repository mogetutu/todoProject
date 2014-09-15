<?php

class Todo extends Eloquent{


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'todo';

	public static $rules = array(
		'task'          => 'required|min:6',
		
	);
   //$todo = DB::table('todo')->paginate(15);

}
