<?php

namespace App\Http\Controllers;

use App\Http\Resources\FruitResource;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index()
    {
        $fruits = Fruit::all();
        return FruitResource::collection($fruits);
    }
}
