<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyerCategoryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        $categories = $buyer->transactions()->with('products.categories')
            ->get()
            ->pluck('products.categories')
            ->unique('id')
            ->collapse();
        return $this->showAll($categories);
    }
}
