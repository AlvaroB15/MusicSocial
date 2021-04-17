<?php

namespace App\Http\Controllers;

use App\Models\Banda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('banda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::table('generos')->get()->dd();
        $generos  = DB::table('generos')->get()->pluck('nombre_categoria','id'); 
        return view('banda.create', compact('generos'));
        // return view('banda.create')->with('generos',$generos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|min:2',
            'genero' => 'required',
            'biografia' => 'required',
            'imagen' => 'required|image' // revisar q sea todo los formatos de imagen, y que no pase de 1MB
        ]);

        // $data = request()->validate([
        //     'titulo' => 'required|min:2',
        // ]);

        DB::table('bandas')->insert([
            'titulo' => $data['titulo']
        ]);

        // dd( $request->all()); // para ver lo que tiene de info el request
        return redirect()->action([BandaController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banda  $banda
     * @return \Illuminate\Http\Response
     */
    public function show(Banda $banda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banda  $banda
     * @return \Illuminate\Http\Response
     */
    public function edit(Banda $banda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banda  $banda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banda $banda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banda  $banda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banda $banda)
    {
        //
    }
}
