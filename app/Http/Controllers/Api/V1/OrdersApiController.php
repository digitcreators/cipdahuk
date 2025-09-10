<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\OrderCollection;
use App\Http\Resources\Api\OrderResource;
use App\Order;
use App\Status;
use App\Website;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class OrdersApiController extends Controller
{
    public function index(Request $request)
    {
        $orders = null;

        if( $request->query('status') ){
            $status = Status::where('slug', '=', $request->query('status') )->firstOrFail();
            $orders = Order::with(  'status', 'user', 'invoice.status' )->where(['status_id' => $status->id ])->orderBy('created_at')->get();
        } else {
            $orders = Order::with(  'status', 'user', 'invoice.status' )->orderBy('created_at')->get();
        }

        return OrderResource::collection($orders)
        ->response()
        ->setStatusCode(Response::HTTP_OK);
    }

    public function show($id)
    {
        $order = Order::with('deadline', 'status', 'user', 'invoice.status' )->findOrFail($id);

        return (new OrderResource($order))
        ->response()
        ->setStatusCode(Response::HTTP_OK);

    }

    public function update(Request $request,Order $order)
    {
        $order->update($request->all());

        return (new OrderResource($order))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
