<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function showWelcome() {
        return View::make('hello');
    }
    
    
    ///    facebook login

    public function getFacebooklogin() {
        $code = Input::get('code');
        $fb = OAuth::consumer('Facebook');

        if (!empty($code)) {
            $token = $fb->requestAccessToken($code);
            $result = json_decode($fb->request('/me'), true);

            //dd($result);
            return Redirect::action('SiteController@getIndex')->with('alert', 'Successfully logged in with Facebook!'); //I get here redirect to / :(
        } else {
            $url = $fb->getAuthorizationUri();

            return Redirect::to((string) $url);
        }
    }

}
