<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Event;

Route::get('/', function () {

	// Event::destroy([3, 4]);
	// Event::create([
	// 	'name' => 'Toto',
	// 	'description' => 'Toto',
	// 	'location' => 'Paris',
	// 	'price' => 0,
	// 	'start_at' => new Datetime('+5 days')
	// ]);

	// Event::create([
	// 	'name' => 'TOURE O',
	// 	'description' => 'New App',
	// 	'location' => 'Paris',
	// 	'price' => 0,
	// 	'start_at' => new DateTime('+10 hours')
	// ]);

// 	Event::create([
		
// 		'name' => 'Concert de Doussou Bagayoko',
// 		'description' => 'Super concert de Doussou',
// 		'location' => 'Gao, ML',
// 		'price' => 50,66
// 	]
// );

	$events = Event::all();
	

	return view('events.index')->withEvents($events);
});
