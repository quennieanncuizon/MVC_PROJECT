<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $agents = Agent::query();

        // Showing paginated data 2 for each page/table
        $agents = $agents->paginate(4);

        return view('agents.index',compact('agents'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'image' => 'required|string|max:30',
            'bio' => 'required|string|max:200'
        ]);
    
        Agent::create($request->all());
    
        return redirect()->route('agents.index')
            ->with('success','Added successfully.');
    }

    /**
     * Display the specified resource.
     */
        public function show(Agent $agent)
    {
        //
    }

    public function edit(Agent $agent)
    {
        return view('agents.edit',compact('agent'));
    }

    public function update(Request $request, Agent $agent)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'image' => 'required|string|max:30',
            'bio' => 'required|string|max:200'
        ]);

        $agent->update($request->all());
    
        return redirect()->route('agents.index')
            ->with('success','Updated successfully.');
    }

    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('agents.index')
            ->with('success','Deleted successfully');

    }
}
