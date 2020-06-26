<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar el modelo
use App\Ticket;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("hola desde controlador tickets");
        //$query = Ticket::all();
        //$query = Ticket::find(1);

        //dd("test prog web 2");
        //algoritmo
        //operaciones en la base de datos

        //Read/Consultar
        //consultar todos los elementos
        $allTickets = Ticket::all(); 
        // //la siguiente línea es equivalente a select * from tickets where id = '3'
        // $query2 = Ticket::find(7);
        // $query3 = Ticket::where('responsable', 'Pedro')->get();
        // $query4 = Ticket::where('created_at', '2020-06-19 01:02:45')->get();
 
        // a través de compact se envían datos a la vista
        return view('tickets.index', compact('allTickets'));
        
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
        //dd($request->description_text);
         //Create/crear
        $ticketObject = new Ticket;
        $ticketObject->descripcion = $request->description_text;
        $ticketObject->responsable = $request->responsable_text;
        $ticketObject->fecha_solicitud = $request->fecha_date;
        $ticketObject->save();

        $allTickets = Ticket::all();
        
        return view('tickets.index', compact('allTickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objectToUpdate = Ticket::find($id);
        return view('tickets.edit', compact('objectToUpdate'));
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
         //update/actualizar
        //dd($request);
        $objectToUpdate = Ticket::find($request->id_ticket_hidden);
        $objectToUpdate->descripcion = $request->description_text;
        $objectToUpdate->responsable = $request->responsable_text;
        $objectToUpdate->fecha_solicitud = $request->fecha_date;
        $objectToUpdate->save();
        
        $allTickets = Ticket::all();
        return view('tickets.index', compact('allTickets'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_ticket)
    {
        //dd($id_ticket);
        //Delete/eliminar
        //borrar por id, puedo pasar uno o varios ids
        $objectToDelete = Ticket::destroy($id_ticket);
        //$objectToDelete = Ticket::destroy(6,7,8,9);
        //$objectToDelete2 = Ticket::where('created_at','<','2020-06-19 01:05:00')->delete();
        $allTickets = Ticket::all();
        
        return view('tickets.index', compact('allTickets'));
    }
}
