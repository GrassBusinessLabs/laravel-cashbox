<?php

namespace App\Http\Controllers;

use App\Models\Cashbox;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CashboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
       $cashboxes = Cashbox::all();
       return response()->json($cashboxes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $cashbox = Cashbox::create($request->all());

        return response()->json($cashbox);
    }

    /**
     * Display the specified resource.
     *
     * @param Cashbox $cashbox
     * @return JsonResponse
     */
    public function show(Cashbox $cashbox)
    {
        return response()->json($cashbox);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Cashbox $cashbox
     * @return JsonResponse
     */
    public function update(Request $request, Cashbox $cashbox)
    {
        $cashbox->update($request->all());

        return response()->json($cashbox);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cashbox $cashbox
     * @return JsonResponse
     */
    public function destroy(Cashbox $cashbox)
    {
        $cashbox->delete();

        return response()->json(['message'=> 'Deleted']);
    }
}
