<?php


namespace Antonkc\Simple_greeting;


class SimpleGreetingController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        return view('greetingView::greet');
    }
}
