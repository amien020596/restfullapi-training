<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyerSellerController extends Controller
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
        $this->adminAuthorized();
        $seller = $buyer->transactions()->with('products.seller')
            ->get()
            ->pluck('products.seller')
            ->unique('id')
            ->values()
            ->pluck('products');
        return $this->showAll($seller);
    }
}
