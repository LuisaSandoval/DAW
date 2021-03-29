Route::get('/', function () {
    return view('index');
});
Route::get('/producto/{id}', function ($id) {
    return view('verproducto')->with('id',$id);
});
Route::get('/contacto', function(){
    $contacto='Maria Jaquelin';
    $valores=10;
    $color="#ccc";
    return view('contacto')->with('nombre',$contacto)
    ->with('fondo',$color)
    ->with('valores',$valores);
    
});
Route::get('/PracticaVistas', function(){
    return view('PracticaVistas');
});
