<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Sample data for events (you can replace this with your database logic)
    protected $events = [
        1 => [
            'title' => 'Baparekraf Developer Day',
            'description' => 'Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia',
            'date' => '03, Oktober 2024',
            'image' => 'https://storage.googleapis.com/a1aa/image/8OlJHc2RHIbsLRfz0f5eQc6vP2fmsuh4zT2AhhfLVSf56eI1JA.jpg',
        ],
        2 => [
            'title' => 'Dicoding Scholarship',
            'description' => 'Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia',
            'date' => '03, Oktober 2024',
            'image' => 'https://storage.googleapis.com/a1aa/image/6qHHXX3hByrtKpDqNULTRRRd2s86lgEmVPea6YZjsN639I1JA.jpg',
        ],
        3 => [
            'title' => 'Upwork',
            'description' => 'Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia',
            'date' => '03, Oktober 2024',
            'image' => 'https://storage.googleapis.com/a1aa/image/jvRVhlryi8o1GxZCyUOr2ScfHUBTsQIOvjy8criGNyS09I1JA.jpg',
        ],
        4 => [
            'title' => 'Baparekraf Developer Day',
            'description' => 'Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia',
            'date' => '03, Oktober 2024',
            'image' => 'https://storage.googleapis.com/a1aa/image/GB8Z97J4MVamOlO5OVt43L1Ol3OUCwBUBFgy3eBNfVfZ3jUnA.jpg',
        ],
        5 => [
            'title' => 'Baparekraf Developer Day',
            'description' => 'Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia',
            'date' => '03, Oktober 2024',
            'image' => 'https://storage.googleapis.com/a1aa/image/vrdyU4Asbs7xDBSO8jZeQJX02cU3FOWWpk4sBfx1waou7RqTA.jpg',
        ],
    ];

    public function show($id)
    {
        // Check if the event exists
        if (!isset($this->events[$id])) {
            abort(404); // Event not found
        }

        // Get the event details
        $event = $this->events[$id];

        // Return the view with event details
        return view('event.details', compact('event'));
    }
}
