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
use App\Models\PaketHarga;
use App\Models\PivotPaketHargaFitur;

class PaketHargaController extends Controller
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
            $data = PaketHarga::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<a href="'.route('razen-supportboard.admin.paket-harga.show', ['id' => $data->id]).'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></a>';
                    $button_edit = '<a href="'.route('razen-supportboard.admin.paket-harga.edit', ['id' => $data->id]).'" class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->addColumn('fitur', function($data){
                    $pivots = PivotPaketHargaFitur::where('paket_harga_id', $data->id)->get();
                    $list = '<ul>';
                    foreach ($pivots as $pivot) {
                        $list .='<li>'.$pivot->deskripsi.'</li>';
                    }
                    $list .='</ul>';
                    return $list;
                })
                ->editColumn('deskripsi', function($data) {
                    return strip_tags(substr($data->deskripsi,0, 20)) . '...';
                })
                ->rawColumns(['aksi', 'fitur'])
                ->make(true);
        }
        return view('razen-supportboard.admin.paket-harga.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('razen-supportboard.admin.paket-harga.create');
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
            'judul' => 'required | max:255',
            'deskripsi' => 'required | max:255',
            'status_popular' => 'required',
            'data_fitur' => 'required'
        ]);

        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        $paket_harga = new PaketHarga;
        $paket_harga->judul = $request->judul;
        $paket_harga->deskripsi = $request->deskripsi;
        $paket_harga->status_popular = $request->status_popular;
        $paket_harga->save();

        $data_fitur = $request->data_fitur;
        for ($i=0; $i < count($data_fitur); $i++) {
            $pivot = new PivotPaketHargaFitur;
            $pivot->paket_harga_id = $paket_harga->id;
            $pivot->deskripsi = $data_fitur[$i]['deskripsi'];
            $pivot->save();
        }

        Alert::success('Berhasil', 'Berhasil menambahkan data');
        return redirect()->route('razen-supportboard.admin.paket-harga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paket_harga = PaketHarga::find($id);

        $get_pivot = PivotPaketHargaFitur::where('paket_harga_id', $id)->first();
        $pivot = [];
        if($get_pivot)
        {
            $pivot = [
                'status' => 'ada',
                'data' => PivotPaketHargaFitur::where('paket_harga_id', $id)->get()
            ];
        } else {
            $pivot = [
                'status' => 'tidak_ada',
                'data' => ''
            ];
        }

        return view('razen-supportboard.admin.paket-harga.detail', [
            'paket_harga' => $paket_harga,
            'pivot' => $pivot
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paket_harga = PaketHarga::find($id);

        $get_pivot = PivotPaketHargaFitur::where('paket_harga_id', $id)->first();
        $pivot = [];
        if($get_pivot)
        {
            $pivot = [
                'status' => 'ada',
                'data' => PivotPaketHargaFitur::where('paket_harga_id', $id)->get()
            ];
        } else {
            $pivot = [
                'status' => 'tidak_ada',
                'data' => ''
            ];
        }

        return view('razen-supportboard.admin.paket-harga.edit', [
            'paket_harga' => $paket_harga,
            'pivot' => $pivot
        ]);
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
        $paket_harga = PaketHarga::find($id);
        $paket_harga->judul = $request->judul;
        $paket_harga->deskripsi = $request->deskripsi;
        $paket_harga->status_popular = $request->status_popular;
        $paket_harga->save();

        if($request->edit_data_fitur)
        {
            $edit_data_fitur = array_values($request->edit_data_fitur);
            for ($i=0; $i < count($edit_data_fitur); $i++) {
                $pivot = PivotPaketHargaFitur::find($edit_data_fitur[$i]['pivot_paket_harga_fitur_id']);
                $pivot->deskripsi = $edit_data_fitur[$i]['deskripsi'];
                $pivot->save();
            }
        }

        if($request->hapus_id_pivot)
        {
            $hapus_id_pivot = explode(',', $request->hapus_id_pivot);
            for ($i=0; $i < count($hapus_id_pivot); $i++) {
                PivotPaketHargaFitur::find($hapus_id_pivot[$i])->delete();
            }
        }

        if($request->data_fitur)
        {
            $data_fitur = $request->data_fitur;
            for ($i=0; $i < count($data_fitur); $i++) {
                $pivot = new PivotPaketHargaFitur;
                $pivot->paket_harga_id = $id;
                $pivot->deskripsi = $data_fitur[$i]['deskripsi'];
                $pivot->save();
            }
        }

        Alert::success('Berhasil', 'Berhasil merubah data');
        return redirect()->route('razen-supportboard.admin.paket-harga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket_harga = PaketHarga::find($id);

        $pivots = PivotPaketHargaFitur::where('paket_harga_id', $id)->get();
        foreach ($pivots as $pivot) {
            PivotPaketHargaFitur::where('paket_harga_id', $pivot->id)->delete();
        }
        $paket_harga->delete();
    }
}
