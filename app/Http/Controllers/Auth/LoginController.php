<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
	{
		$input = $request->all();
        $credentials = $this->getLoginCredentials($input);
        $rememberme = isset($input['rememberme'])?$input['rememberme']:false;
        if (Auth::attempt($credentials, $rememberme))
        {   
            
            if(!(Auth::user()->confirmed))
            {
                Auth::logout();
                return back()->with('erro','Cadastro ainda não liberado!!');            
            }else{
                return \Redirect::intended("/home");
            }
        }
        return back()->with('erro','Dados inválidos');
            
    }

    protected function getLoginCredentials($input)
	{
		return [
			"email" => $input['email'],
            "password" => $input['password'],
		];
	}

}
