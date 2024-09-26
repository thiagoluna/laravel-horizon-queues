<?php

use App\Jobs\ExampleJob;
use App\Jobs\ExamplefailedJob;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dispatch-job', function () {
   ExampleJob::dispatch([ 'example' => 'value' ]);
});

Route::get('/dispatch-failed-job', function () {
    ExamplefailedJob::dispatch([ 'example' => 'failed' ]);
});

Route::get('/test-email', function () {
    Mail::to("thiagoluna2@gmail.com")->send(new TestMail);

    return "Email sent";
});

Route::get('/create-users', function () {
   foreach (range(1,5) as $value) {
       \App\Models\User::factory()->create([ 'image' => "users/Arte {$value}.png" ]);
   }

   return \App\Models\User::get();
});

