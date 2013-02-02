<?php


Route::get('/', function()
{
	$data['title'] = 'Vectors | 2013';
	return View::make('home.index');
});

Route::get('event/(:any)', function()
{
	//$data = '';
	$cacheTime = 30;

	$perma = URI::segment('2');

	//This mutilple if..else can be worked out to something minimum.
	if($perma == 'robo-rebels')
	{
		if(! Cache::has($perma) )
		{
			//fetch values which do not differ
			$event = DB::table('techfest')->where('permalink', '=', $perma)->first();

			$event1 = DB::table('techfest')->where('permalink', '=', 'death-race')->first();
			$event2 = DB::table('techfest')->where('permalink', '=', 'dozers')->first();
			$event3 = DB::table('techfest')->where('permalink', '=', 'a-maze')->first();
			$event4 = DB::table('techfest')->where('permalink', '=', 'aquabotics')->first();

			Cache::put($perma, $event, $cacheTime);
			Cache::put('death-race', $event1, $cacheTime);
			Cache::put('dozers', $event2, $cacheTime);
			Cache::put('a-maze', $event3, $cacheTime);
			Cache::put('aquabotics', $event4, $cacheTime);

		}
		
		
		$data['event'] = Cache::get($perma);
		$data['event1'] = Cache::get('death-race');
		$data['event2'] = Cache::get('dozers');
		$data['event3'] = Cache::get('a-maze');
		$data['event4'] = Cache::get('aquabotics');

		return View::make('home.event-multiple', $data);


	}
	elseif($perma == 'are-you-game')
	{
		if(! Cache::has($perma) )
		{
			//fetch values which do not differ
			$event = DB::table('techfest')->where('permalink', '=', $perma)->first();

			$event1 = DB::table('techfest')->where('permalink', '=', 'counterstrike')->first();
			$event2 = DB::table('techfest')->where('permalink', '=', 'warcraft-dota')->first();
			$event3 = DB::table('techfest')->where('permalink', '=', 'nfs-most-wanted')->first();
			$event4 = DB::table('techfest')->where('permalink', '=', 'fifa')->first();

			Cache::put($perma, $event, $cacheTime);
			Cache::put('counterstrike', $event1, $cacheTime);
			Cache::put('warcraft-dota', $event2, $cacheTime);
			Cache::put('nfs-most-wanted', $event3, $cacheTime);
			Cache::put('fifa', $event4, $cacheTime);

		}

		$data['event'] = Cache::get($perma);
		$data['event1'] = Cache::get('counterstrike');
		$data['event2'] = Cache::get('warcraft-dota');
		$data['event3'] = Cache::get('nfs-most-wanted');
		$data['event4'] = Cache::get('fifa');
		

		return View::make('home.event-multiple', $data);
	}
	else
	{
		//Other event which have just one page
		//dd($perma);
		if(! Cache::has($perma) )
		{
			$event = DB::table('techfest')->where('permalink', '=', $perma)->first();

			if(!$event)
				return Response::error('404');
			else
				Cache::put($perma, $event, $cacheTime);
		}

		$data['event'] = Cache::get($perma);
		//dd($data);
		return View::make('home.event', $data);
	}

	
});







Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});