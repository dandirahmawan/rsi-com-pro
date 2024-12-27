<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'UI/UX Design',
                'description' => 'Creating intuitive and engaging user experiences that delight customers and drive results.',
                'image' => 'images/uiux.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Web Development',
                'description' => 'Building high-performing, scalable websites tailored to meet your business goals.',
                'image' => 'images/web-development.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Developing innovative mobile applications to keep your business connected on the go.',
                'image' => 'images/mobile-development.jpg',
                'link' => '#'
            ],
            [
                'title' => ' E-commerce / Company Profile',
                'description' => 'Empowering Your Business to Sell More and Stand Out in the Digital World.',
                'image' => 'images/company-profile.jpg',
                'link' => '#'
            ],
        ];

        return view('pages.home', compact('services'));
    }
}
