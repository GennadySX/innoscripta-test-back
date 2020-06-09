<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->json(['orders' => Order::where('user_id', Auth::id())->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request, Order $order)
    {
        return $order->fill($request->all())->save() ?
            $this->json(['order' => $order])
            : $this->json(['err' => 'validation content!'], 204);


    }

    public function createByUser(Request $request, Order $order,  $data = [])
    {
        foreach($request->toArray() as $key => $value) $data[$key] = $value;
        $data['user_id'] = Auth::id();
        $data['fullName'] = Auth::user()->name;
        return $order->fill($data)->save() ?
            $this->json(['order' => $order])
            : $this->json(['err' => 'validation content!'], 204);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Order $order
     * @return Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Order $order
     * @return Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
