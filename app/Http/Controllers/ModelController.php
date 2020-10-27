<?php

namespace App\Http\Controllers;

use App\Services\AutoruService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\CarModel;


/**
 * @property AutoruService autoruService
 */
class ModelController extends Controller
{
    public function __construct(AutoruService $autoruService)
    {
        $this->autoruService = $autoruService;
    }

    public function get_brand_models(Request $request)
    {

        $brand_id = $request->input('model_id');

        $raw = new AutoruService();
        $models = $raw->getModels($brand_id);
        return Response::json(['models' => $models]);
    }

    public function getComplectations($brand_id, $model_id)
    {
        $raw = new AutoruService();

        return Response::json(['modifications' => $raw->getComplectations($brand_id, $model_id)]);
    }

    public function getEstimation(Request $request)
    {
        $raw = new AutoruService();
        $data = $request->getContent();
        return Response::json(['estimation' => $raw->getEstimation($data)]);
    }

    public function getYearsRange()
    {
        $raw = new AutoruService();
        $getYearsRange = $raw->getYearsRange();
        return Response::json(['yearsRange' => $getYearsRange]);
    }

    public function getMileageRange()
    {
        $raw = new AutoruService();
        $getMileageRange = $raw->getMileageRange();
        return Response::json(['mileageRange' => $getMileageRange]);
    }

    public function getCreditPrograms()
    {
        $raw = new AutoruService();
        return $raw->getCreditPrograms();
    }


}
