<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use GuzzleHttp\Promise\Create;

class CategoryService
{
    public function getCategories()
    {
        return app(TryService::class)(function (){
           return Category::where('is_active',1)->get();
        });
    }

    public function setCategory($request)
    {
        return app(TryService::class)(function () use ($request){
            return Category::create($request->validated());
        });
    }
}
