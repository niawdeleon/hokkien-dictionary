<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


use App\Task;
use App\Entry;
use Illuminate\Http\Request;


Route::get('/', function (Request $request) {
	$searchTerm = $request->input('searchTerm');

    if (strlen($searchTerm) == 0) {
        return view('entries');
    }

    $entries = App\Entry::whereRaw('match (english) against (? in natural language mode)', array($searchTerm))
        ->orderByRaw('length(english)')
        ->get();

    return view('entries', [
        'entries' => $entries
    ]);
});

/* Add New Task */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }


    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');

});


Route::delete('/task/{task}', function (Task $task) {
	//
});



