<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exception\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

  SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
  SimpleRouter::get( '/registreren', 'RegistrationController@registrationForm')->name('register.form');
  SimpleRouter::get( '/registreren/verwerken', 'RegistrationController@registrationForm')->name('register.handle');
}
