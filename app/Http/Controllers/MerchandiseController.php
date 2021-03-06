<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Merchandise;
use App\Models\MerchandiseCategory;
use App\Http\Requests\MerchandiseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Merchandise::with(['merchandiseCategory']);

        if ($request->has('search')) {
            $products = $products->where('name', 'like', '%'.$request->search.'%');
        }

        if ($request->has('cat')) {
            $products = $products->where('merchandise_category_id', $request->cat);
        }

        $products = $products->paginate(20)->withQueryString();
        $totalProduct = $products->count();
        $categories = MerchandiseCategory::get();

        if (Auth::check() and Auth::user()->role === 'admin') {
            return view('admin.merchandise.index')->with([
                'merchandises' => Merchandise::get()
            ]);
        } else {
            return view('merchandise.index', get_defined_vars());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.merchandise.create')->with([
            'merchandiseCategories' => MerchandiseCategory::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerchandiseRequest $request)
    {
        $merchandise = Merchandise::create($request->validated());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/img/merchandise');
            $merchandise->update(['image' => $path]);
        }
        return redirect()->route('admin.merchandise.create')->with([
            'success' => 'Berhasil Menambahkan Merchandise!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function show(Merchandise $merchandise)
    {
        return view('admin.merchandise.show')->with([
            'merchandise' => $merchandise,
            'merchandiseCategories' => MerchandiseCategory::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function update(MerchandiseRequest $request, Merchandise $merchandise)
    {
        $merchandise->update($request->validated());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/img/merchandise');
            Storage::delete($merchandise->image);
            $merchandise->update(['image' => $path]);
        }
        return redirect()->route('admin.merchandise.show', $merchandise->id)->with([
            'success' => 'Berhasil Memperbarui Merchandise!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merchandise $merchandise)
    {
        Storage::delete($merchandise->image);
        $merchandise->delete();
        return redirect()->route('admin.merchandise.index')->with(['success' => 'Berhasil Menghapus Merchandise!']);
    }
}
