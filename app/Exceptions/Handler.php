<?php

namespace App\Exceptions;

use App\CarModel;
use Exception;
use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use App\City;
use Illuminate\Support\Facades\DB;

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
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
/*        if (!$request->wantsJson() && ($exception instanceof ModelNotFoundException || $exception instanceof ViewException)) {
            $city_arr = explode('/', $request->path());
            $cities_list_arr = DB::table('cities')->select('alias')->get()->toArray();
            $cities_list = [];

            foreach ($cities_list_arr as $item) {
                $cities_list[] = $item->alias;
            }
            $city_target = in_array($city_arr[0], $cities_list) ? $city_arr[0] : 'perm';

            $city = new City;
            $cities = $city->getCities($city_target);
            $data['coordinates'] = explode(",", $cities['active']['coords']);

            $params = [
                'data' => $data,
                'cities' => $cities,
                'city' => $city_target,
                'models' => CarModel::with('types_preview')->orderBy('sort', 'asc')->get(),
            ];
            return response(view('errors.404', $params), 404);
        }*/

        return parent::render($request, $exception);
    }
}
