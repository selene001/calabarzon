<?php

class HomeController extends Controller
{
    public function index(){
        $address = "Villa Ofelia";

        return view ('testing', compact('address'));
    }
}
?>