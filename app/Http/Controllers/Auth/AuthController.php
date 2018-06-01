<?php
/**
 * Created by PhpStorm.
 * User: barangck
 * Date: 29/5/18
 * Time: 9:34 PM
 */

namespace App\Http\Controllers\Auth;

use Auth;
use Socialite;
use Session;
use App\Models\User;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/c2c';
    /**
     * Redirect the user to the OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        $lang = app()->getLocale();
        Session::put('applocale', $lang);
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {

        $authUser = User::where('email', $user->email)->first();

        if ($authUser) {
            if($authUser->provider_id != $user->id && $authUser->provider != $provider){

                $authUser->provider = $provider;
                $authUser->provider_id = $user->id;
                $authUser->save();

            }

            $synRole = $authUser->syncRoles(['super-admin']);

            return $authUser;
        }

        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => 'secret_' . $provider . $user->id,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }
}