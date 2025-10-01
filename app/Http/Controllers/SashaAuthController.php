<?php

namespace App\Http\Controllers;

use App\Enums\UserRol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Spatie\Activitylog\Models\Activity;

class SashaAuthController extends Controller
{
    public function redirectToSasha(string $guard, Request $request)
    {
        session(['guard' => $guard]);
        $request->session()->put('state', $state = Str::random(40));
        $scopes = [];

        switch ($guard) {
            case 'student':
                $scopes = ["students:read", "teachers:read", "user", "email"];
                break;
            case 'teacher':
                $scopes = ["students:read", "teachers:read", "user", "email"];
                break;
            case 'developer':
                $scopes = ["students:read", "teachers:read", "user", "email"];
                break;
            default:
                $scopes = ["students:read", "teachers:read", "user", "email"];
                break;
        }

        // This is the query
        $q = [
            'client_id'         => config('services.sasha.client_id'),
            'redirect_uri'          => config('services.sasha.redirect'),
            'response_type'     => 'code',
            'scope'             => implode(" ", $scopes),
            'state'             => $state,
            // Custom HTTP
            'guard'             => $guard
        ];

        // HTTP BUILD WITH QUERY
        $query = http_build_query($q);


        // Notify
        Log::info("New user is attempt login in SASHA:");
        Log::info($q);

        return redirect(config('services.sasha.main_url') . '/oauth/authorize?' . $query);
    }

    public function handleCallback(Request $request)
    {
        $response = Http::asForm()->post(config('services.sasha.main_url') . '/oauth/token', [
            'grant_type'    => 'authorization_code',
            'client_id'     => config('services.sasha.client_id'),
            'client_secret' => config('services.sasha.client_secret'),
            'redirect_uri'  => config('services.sasha.redirect'),
            'code'          => $request->code,
        ]);

        if (!$response->successful()) {
            return redirect('/')->withErrors('No se pudo autenticar con SASHA.');
        }

        $accessToken = $response->json('access_token');
        session([
            'sasha_access_token' => $accessToken,
        ]);

        $userResponse = Http::withToken($accessToken)->get(config('services.sasha.main_url') . '/api/me')->json();

        if (!$userResponse->successful()) {
            return redirect('/error')->withErrors('No se pudo autenticar con SASHA.');
        }
        $sashaUser = $userResponse['data'];

        $user = User::updateOrCreate([
            'uuid' => $sashaUser['uuid'],
        ], [
            'name'              => $sashaUser["name"],
            'last_name'         => $sashaUser["last_name"],
            'uuid'              => $sashaUser['uuid'],
            'email'             => $sashaUser['email'],
            'grade'             => $sashaUser['grade'],
            'fingerprint'       => $sashaUser['fingerprint'],
            'document'          => $sashaUser['document'],
            'document_type'     => $sashaUser['document_type'],
            'last_login_ip'     => $sashaUser["last_login_ip"],
            'last_login_at'     => $sashaUser['last_login_at'],
            'password'          => Hash::make("somosoeistas"),
            'rol'               => UserRol::from($sashaUser["type"] ?? 'student'),
        ]);

        Log::info("Se creo o actualizo un usuario");
        Auth::login($user);

        Log::info(Auth::user());

        return redirect('/');
    }
}
