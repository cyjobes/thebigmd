<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BigmdController extends Controller
{
    private $live_switch; // State of the web page

    public function __construct()
    {
        $this->live_switch = config("app.live");
    }

    public function index()
    {
        switch ($this->live_switch) {
            case "on":
                return view("live-display");
                break;

            case "off":
                return view("standard-display");
                break;

            case "promo":
                return view("promo-display");
                break;
        }
    }

    public function private_show()
    {
        return view("private");
    }
}
