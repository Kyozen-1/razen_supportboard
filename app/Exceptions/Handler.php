<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function render($request, Throwable $exception)
    {
        if($this->isHttpException($exception)){
            if (view()->exists('errors.' . $exception->getStatusCode())) {
                $errors = $exception->getMessage();
                return response()->view('errors.' . $exception->getStatusCode(), compact('errors'), $exception->getStatusCode());
            }
        }
        return parent::render($request, $exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if($request->expectsJson())
        {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        $guard = Arr::get($exception->guards(), 0);

        switch($guard)
        {
            case 'razen_supportboard':
                $login = 'razen-supportboard.login';
                break;
            default:
                $login = 'razen-supportboard.login';
                break;
        }

        return redirect()->guest(route($login));
    }
}
