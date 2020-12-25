<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|min:2',
            'booking_date' => 'required|date|after_or_equal:today',
            'count_days' => 'required|numeric|max:365',
            'email' => 'required|email',
            'phone' => 'required|string',
            'comment' => 'nullable|string',
        ]);
        if ($validator->fails()) {
            return new Response($validator->errors()->toJson(), 400);
        } else {
            return new Response(Order::query()->create($request->all()));
        }
    }
}
