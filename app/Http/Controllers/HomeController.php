<?php

namespace App\Http\Controllers;

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
                'title' => 'E-commerce / Company Profile',
                'description' => 'Empowering Your Business to Sell More and Stand Out in the Digital World.',
                'image' => 'images/company-profile.jpg',
                'link' => '#'
            ],
        ];

        $portfolios = [
            [
                'year' => '2022',
                'title' => 'Machine Learning and Data Science. PT PLN Indonesia Power',
                'description' => 'We are collaborating with PT Indonesia Power by providing highly skilled experts in the fields of data science and machine learning to address complex data management challenges.',
                'image' => 'images/7150856-pt-indonesia-power.jpg',
            ],
            [
                'year' => '2023',
                'title' => 'Web Development Using Java 8.0',
                'description' => 'Repository collaborate with PT Pronata Data Insani, PT Indivara Sejahtera Sukses Makmur (Indivara) and PT Bank UOB Indonesia by assisting in fixing code for the internal UOB App.',
                'image' => 'images/uob.jpg',
            ],
        ];

        return view('pages.home', compact('services', 'portfolios'));
    }
    public function portfolio()
    {
        $portfolios = [
            [
                'year' => '2022',
                'title' => 'Machine Learning and Data Science. PT PLN Indonesia Power',
                'description' => 'We are collaborating with PT Indonesia Power by providing highly skilled experts in the fields of data science and machine learning to address complex data management challenges.',
                'image' => 'images/7150856-pt-indonesia-power.jpg',
            ],
            [
                'year' => '2023',
                'title' => 'Web Development Using Java 8.0',
                'description' => 'Repository collaborate with PT Pronata Data Insani, PT Indivara Sejahtera Sukses Makmur (Indivara) and PT Bank UOB Indonesia by assisting in fixing code for the internal UOB App.',
                'image' => 'images/uob.jpg',
            ],
        ];
        return view('pages.portfolio', compact('portfolios'));
    }
}
