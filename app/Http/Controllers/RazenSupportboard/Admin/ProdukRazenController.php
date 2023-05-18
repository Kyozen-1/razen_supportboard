<?php

namespace App\Http\Controllers\RazenSupportboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use Auth;
use App\Models\ProdukRazen;

class ProdukRazenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $data = ProdukRazen::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('gambar', function($data) {
                    return '<img src="'.asset('images/razen-supportboard/produk-razen/'.$data->gambar).'" style="height:5rem;">';
                })
                ->editColumn('link', function($data) {
                    return '<a class="btn btn-icon btn-primary waves-effect waves-light" href="'.$data->link.'" target="blank">Link</a>';
                })
                ->rawColumns(['aksi', 'gambar', 'link'])
                ->make(true);
        }
        return view('razen-supportboard.admin.produk-razen.index');
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
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'link' => 'required | max:255',
            'gambar' => 'required | mimes:png,jpg,jpeg,webp',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/razen-supportboard/produk-razen/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $produk_razen = new ProdukRazen;
        $produk_razen->nama = $request->nama;
        $produk_razen->link = $request->link;
        $produk_razen->gambar = $gambarName;
        $produk_razen->save();

        return response()->json(['success' => 'Berhasil menambahkan Produk Razen']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => ProdukRazen::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => ProdukRazen::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'link' => 'required | max:255'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $produk_razen = ProdukRazen::find($request->hidden_id);
        $produk_razen->nama = $request->nama;
        $produk_razen->link = $request->link;
        if($request->gambar)
        {
            File::delete(public_path('images/razen-supportboard/produk-razen/'.$produk_razen->gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-supportboard/produk-razen/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $produk_razen->gambar = $gambarName;
        }
        $produk_razen->save();

        return response()->json(['success' => 'Berhasil menambahkan Produk Razen']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk_razen = ProdukRazen::find($id);

        File::delete(public_path('images/razen-supportboard/produk-razen/'.$produk_razen->gambar));

        $produk_razen->delete();
    }
}
