<?php

namespace App\Traits;
use illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

trait BaseResponser{

    private function successResponse($data,$code){
    return response()->json($data, $code);
    }
    protected function errorResponse($message,$code){
        return response()->json(['error'=>$messsage,'code'=>$code],$code);

    }
    protected function showAll(Collection $collection,$code=200){

        return $this->successResponse(['data'=>$collection],$code);
    }

    protected function showOne(Model $model,$code=200){

        return $this->successResponse(['data'=>$model],$code);
    }
}

