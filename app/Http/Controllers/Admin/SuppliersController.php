<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Requests\SupplierRequest;
use App\Http\Controllers\Controller;

use App\Supplier;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SupplierRequest $request)
    {
        Supplier::create($request->all());
        return redirect()->route('admin.suppliers.index')->with('status', 'Supplier added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('admin.suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(SupplierRequest $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->update($request->all());

        return redirect()->route('admin.suppliers.index')->with('status', 'Supplier record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Supplier::destroy($id);
        return redirect()->route('admin.suppliers.index')->with('status', 'Supplier removed!');
    }
}
