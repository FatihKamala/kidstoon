<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class utamaController extends Controller
{
    public function show()
    {
        $video = ["https://www.youtube.com/embed/OxfhJMEVIVg?start=30", "https://www.youtube.com/embed/kS6aySXglqE?start=14", "https://www.youtube.com/embed/KC1whRMga1U?start=14",
        "https://www.youtube.com/embed/kS6aySXglqE?start=14", "https://www.youtube.com/embed/KC1whRMga1U?start=14"];
        return view('home', ['video' => $video]);
    }
}
