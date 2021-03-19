<?php

namespace App\Http\Controllers;

use App\Models\Reclamo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReclamo;

use App\Mail\ReclamosMailable;
use Illuminate\Support\Facades\Mail;

class ReclamoController extends Controller
{
    public function index(){
        $reclamos = Reclamo::OrderBy('id', 'desc')->paginate();

        return view('reclamos.index', compact('reclamos'));
    }

    public function create(){
        return view('reclamos.create');
    }

    public function store(StoreReclamo $request){

        // $reclamo = new Reclamo();
        // $reclamo->name = $request->name;
        // $reclamo->descripcion = $request->descripcion;
        // $reclamo->save();

        /* 3.1.EN LUGAR DE PASAR TODO ESE CODIGO, ABAJO UTILIZAMOS MENOS EN UNA LINEA */

        $reclamo = Reclamo::create($request->all());

        return redirect()->route('reclamos.show', $reclamo);
    }

    public function show(Reclamo $reclamo){

        // /* probando correo */
        // $mail = new ReclamosMailable($reclamo);
        // Mail::to($reclamo)->send($mail);

        return view('reclamos.show', compact('reclamo'));
    }

    public function envio(Reclamo $reclamo)
    {
        // $reclamo->status = 1;
        // $reclamo->save();

        // /* probando correo */
        $mail = new ReclamosMailable($reclamo);
        Mail::to($reclamo->email)->queue($mail);

        return redirect()->route('reclamos.index')->with('info', 'Mensaje Enviado');
    }

    public function edit(Reclamo $reclamo){

        return view('reclamos.edit', compact('reclamo'));
    }

    public function update(Request $request, Reclamo $reclamo){

        $request->validate([
            'name' => 'required',
            'type_document'  => 'required',
            'number_document'  => 'required|max:11',
            'region'  => 'required',
            'provincia'  => 'required',
            'distrito'  => 'required',
            'direccion'  => 'required',
            'categoria'  => 'required',
            'email'  => 'required',
            'descripcion'  => 'required|min:10'
        ]);
        
        $reclamo->update($request->all());

        return redirect()->route('reclamos.show', $reclamo);
    }

    public function destroy(Reclamo $reclamo){
        $reclamo->delete();
        return redirect()->route('reclamos.index');
    }

    public function envijajao(Request $request){
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new ReclamosMailable($request->all());
        Mail::to('plandauro@unab.com.pe')->send($correo);

        return redirect()->route('reclamos.index')->with('info', 'Mensaje Enviado');
    }
    // public function index2(){
    //     return view('reclamos.index');
    // }
}
