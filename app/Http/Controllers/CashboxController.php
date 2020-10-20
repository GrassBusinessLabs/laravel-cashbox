<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cashbox\StoreRequest;
use App\Http\Requests\Cashbox\UpdateRequest;
use App\Http\Resources\CashboxResource;
use App\Http\Resources\CashboxResourceCollection;
use App\Models\Cashbox;
use Exception;
use Illuminate\Http\JsonResponse;

class CashboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CashboxResourceCollection
     */
    public function index()
    {
        // $cashboxes = Cashbox::all();
       $cashboxes = Cashbox::/*with('amounts')->*/paginate(5);
       // return CashboxResourceCollection::make($cashboxes);
       return CashboxResourceCollection::make($cashboxes)->toArray(null);
       // return $this->success(CashboxResourceCollection::make($cashboxes));
       // return CashboxResource::collection($cashboxes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequest $request)
    {
        $cashbox = Cashbox::create($request->validated());

        return response()->json($cashbox, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Cashbox $cashbox
     * @return CashboxResource
     */
    public function show(Cashbox $cashbox)
    {
        $cashbox->load(['amounts']);
        return CashboxResource::make($cashbox);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Cashbox $cashbox
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Cashbox $cashbox)
    {
        $cashbox->update($request->validated());

        return response()->json($cashbox);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cashbox $cashbox
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Cashbox $cashbox)
    {
        $cashbox->delete();

        return response()->json(['message'=> 'Deleted'], 204);
    }

    public function test()
    {
        return [];
    }
}
