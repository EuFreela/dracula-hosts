<?php

namespace Lameck\Dracula\Hosts\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DraculaHostsController extends Controller
{
    
    public function index()
    {
        return view('Lameck\Dracula\Hosts::hosts')
        ->with([
            'hosts' => DB::table('hosts')->get()
            ]);
    }

    public function View($id)
    {
        return view('Lameck\Dracula\Hosts::view')
        ->with([
            'host'=>DB::table('hosts')->where('hosts.id','=',$id)
            ->join('machine','machine.hosts_id','hosts.id')
            ->select(
                'hosts.id as host_id',
                'machine.id as machine_id',
                'hosts.*',
                'machine.*'
            )            
            ->first()
            ]);
    }

}
