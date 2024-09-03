<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $viewData = [
            'title' => 'Home - Online Store',
            'subtitle' => 'Welcome to our store',
        ];

        return view('home.index')->with('viewData', $viewData);
    }

    public function about(): View
    {
        $viewData = [
            'title' => 'About us - Online Store',
            'subtitle' => 'About us',
            'description' => 'This is an about page...',
            'author' => 'Developed by: Verónica',
        ];

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [
            'title' => 'Contact Us - Online Store',
            'subtitle' => 'Contact Information',
            'email' => 'verito@gmail.com',
            'address' => 'Calle 123#56-20',
            'phone' => '456-7890',
        ];

        return view('home.contact')->with('viewData', $viewData);
    }
}
