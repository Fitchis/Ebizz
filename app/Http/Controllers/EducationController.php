<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;


class EducationController extends Controller
{
    public function index()
    {
        // Static data
        $educations = [
            [
                'title' => 'Introduction to Laravel',
                'category' => 'Web Development',
                'description' => 'Learn the basics of Laravel, a powerful PHP framework for building web applications.',
                'image_url' => 'https://example.com/images/laravel.jpg',
            ],
            [
                'title' => 'Mastering JavaScript',
                'category' => 'Programming',
                'description' => 'A comprehensive course on JavaScript, covering everything from basics to advanced concepts.',
                'image_url' => 'https://example.com/images/javascript.jpg',
            ],
            [
                'title' => 'Data Science with Python',
                'category' => 'Data Science',
                'description' => 'Explore data analysis, visualization, and machine learning using Python.',
                'image_url' => 'https://example.com/images/python.jpg',
            ],
            [
                'title' => 'Responsive Web Design',
                'category' => 'Web Design',
                'description' => 'Learn how to create beautiful, responsive websites that work on all devices.',
                'image_url' => 'https://example.com/images/webdesign.jpg',
            ],
            [
                'title' => 'Digital Marketing Strategies',
                'category' => 'Marketing',
                'description' => 'Understand the fundamentals of digital marketing and how to implement effective strategies.',
                'image_url' => 'https://example.com/images/marketing.jpg',
            ],
        ];

        return view('educations.index', compact('educations'));
    }

    public function show($index)
    {
        // Static data (same as above)
        $educations = [
            [
                'title' => 'Introduction to Laravel',
                'category' => 'Web Development',
                'description' => 'Learn the basics of Laravel, a powerful PHP framework for building web applications.',
                'image_url' => 'https://example.com/images/laravel.jpg',
            ],
            [
                'title' => 'Mastering JavaScript',
                'category' => 'Programming',
                'description' => 'A comprehensive course on JavaScript, covering everything from basics to advanced concepts.',
                'image_url' => 'https://example.com/images/javascript.jpg',
            ],
            [
                'title' => 'Data Science with Python',
                'category' => 'Data Science',
                'description' => 'Explore data analysis, visualization, and machine learning using Python.',
                'image_url' => 'https://example.com/images/python.jpg',
            ],
            [
                'title' => 'Responsive Web Design',
                'category' => 'Web Design',
                'description' => 'Learn how to create beautiful, responsive websites that work on all devices.',
                'image_url' => 'https://example.com/images/webdesign.jpg',
            ],
            [
                'title' => 'Digital Marketing Strategies',
                'category' => 'Marketing',
                'description' => 'Understand the fundamentals of digital marketing and how to implement effective strategies.',
                'image_url' => 'https://example.com/images/marketing.jpg',
            ],
        ];

        // Return a single education item based on index
        if (isset($educations[$index])) {
            return view('education.show', ['education' => $educations[$index]]);
        }

        return abort(404); // Return a 404 error if not found
    }
}

