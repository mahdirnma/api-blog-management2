<?php

namespace App\Services;

class ApiResponseBuilder
{
    private ApiResponseService $responseService;
    public function __construct(){
        $this->responseService = new ApiResponseService;
    }

    public function message(string $message)
    {
        $this->responseService->message=$message;
        return $this;
    }

    public function data(mixed $data)
    {
        $this->responseService->data=$data;
        return $this;
    }
    public function code(int $code){
        $this->responseService->code=$code;
        return $this;
    }

    public function get()
    {
        return $this->responseService;
    }

    public function response()
    {
        return $this->responseService->response();
    }
}
