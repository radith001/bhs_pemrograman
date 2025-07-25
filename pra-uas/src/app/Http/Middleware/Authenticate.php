<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Support\Facades\DB;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            if ($request->header('token')) {
                $token = $request->header('token');
            }
            if ($token) {
                $check_token = DB::connection('mysql')
                    ->table('users')
                    ->where('password', $token)
                    ->first();
                if ($check_token === null) {
                    $response['success'] = 'false';
                    $response['message'] = 'permission not allowed';
                    return response()->json($response, 403);
                } else {
                    $response['success'] = 'false';
                    $response['message'] = 'not allowed';
                    return response()->json($response, 401);
                }
            } else {
                $response['success'] = 'false';
                $response['message'] = 'not authorised';
                return response()->json($response, 401);
            }
        }

        return $next($request);
    }
}
