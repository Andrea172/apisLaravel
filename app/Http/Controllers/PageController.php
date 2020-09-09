<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Stichoza\GoogleTranslate\GoogleTranslate;
class PageController extends Controller
{
    public function inicio(){
        $notas = App\Nota::paginate(2);
        return view('welcome', compact('notas'));

    }

    public function detalle($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));

    }

    public function nuevoDato(Request $request){
        //return $request->all;
        $request->validate([
            'nombre' => 'required',
            'descripción' => 'required',
        ]);
        $notaNueva = new App\Nota; //propiedades del modelo
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripción = $request->descripción;
        $notaNueva->save();
        return back()->with('mensaje', 'Nota agregada'); //devuelta nuestro sitio web


    }

    public function editar($id){
        
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));

    }

    public function guardarEdicion(Request $request, $id){
        $request->validate([
            'nombre' => 'required',
            'descripción' => 'required',
        ]);
        $notaEditada = App\Nota::findOrFail($id);
        $notaEditada->nombre = $request->nombre;
        $notaEditada->descripción = $request->descripción;
        $notaEditada->save();
        return back()->with('mensaje', 'Nota actualizada');

    }

    public function eliminar($id){
        
        $notaEditada = App\Nota::findOrFail($id);
        $notaEditada->delete();
        return back()->with('mensaje', 'Nota eliminada');

    }

    public function fotos(){
        
        return view('fotos');
    }

    public function blog(){
        $texto=['Bienvenidos al nuevo parque','Actividades en el parque','Jugar con la pelota', 'Bailar', 'Conciertos al aire libre', 'Cuentos para niños'];
        return view('blog', compact( 'texto'));
    }

    public function traducirTexto(){
        $tr = new GoogleTranslate(); 
        $tr->setSource('es'); 
        $tr->setTarget('en'); 
        $texto=['Bienvenidos al nuevo parque','Actividades en el parque','Jugar con la pelota', 'Bailar', 'Conciertos al aire libre', 'Cuentos para niños'];
        
        for($i = 0; $i <=5 ; $i++){
           $linea = $tr->translate($texto[$i]);
           $texto[$i]= $linea;
        }
        return view('blog', compact('texto'));
    }

    public function nosotros($nombre=null){
        $equipo = ['Andrea', 'Lucía', 'Alejandra'];
        
        return view('nosotros', compact('equipo', 'nombre'));
    }
}
