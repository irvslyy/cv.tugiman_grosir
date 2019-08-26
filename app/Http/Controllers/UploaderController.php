<?php

namespace App\Http\Controllers;
use App\Produk;
use App\User;
use Illuminate\Http\Request;
use Storage;

class UploaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::paginate(5);
        return view('admin',['produks' => $produks]);
    }
    // public function usercount()
    // {
    //     $user = User::all()->count();
    //     return view('admin',['users' => $user]);

    // }

    public function indextwo()
    {
        $produks = Produk::paginate(6);
        return view('welcome',['produks' => $produks]);
    }
    public function indexthree()
    {
        $produks = Produk::all();
        return view('produk.show',['produks' => $produks]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produks = new Produk;
        $produks->nama_produk = $request->nama_produk;
        $produks->desc_produk = $request->desc_produk;
        $produks->catatan_produk = $request->catatan_produk;
        $produks->berat = $request->berat;
        $produks->merek = $request->merek;

        $path = Storage::putFile('public', $request->file('files'));
        $url = Storage::url($path);

        $produks->image = $url;
        $produks->price_produk = $request->price_produk;

        $produks->save();

        return redirect()->route('adminpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produks = Produk::find($id);
        return view('produk.show',['produks' => $produks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function autocomplete(Request $request)
    {
        $data = Produk::select("nama_produk")
                ->where("nama_produk","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks = Produk::find($id);
        $produks->delete();

        return back();
    }
}
