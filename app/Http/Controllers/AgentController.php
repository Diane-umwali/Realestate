<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    Public function AgentDashboard(){
        return view('agent.agent_dashboard');

    }
}
