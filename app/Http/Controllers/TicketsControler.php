<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsControler extends Controller
{
    public function index(){
        return view('new_ticket');
    }
    public function store(Request $request){
        $ticket=new Ticket();

    $ticket->title=$request->title;
    $ticket->category=$request->category;
    $ticket->priority=$request->priority;
    $ticket->massage=$request->message;
    $ticket->save();
    return redirect()->route('tickets.all');
   }

   public function all(){
   $tickets = Ticket::orderBy('created_at')->get();
    return view('my_tickets',compact('tickets'));

}

public function show($id){
  $tasks=Ticket::find($id);
    return view('show_ticket',compact('tasks'));
}
}
