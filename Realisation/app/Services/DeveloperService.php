<?php

namespace App\Services;

class DeveloperService
{
    public function getDeveloper()
    {
        return [
            'id' => 1,
            'first_name' => 'Anouar',
            'last_name' => 'Benyekhlef',
            'title' => 'Full Stack Developer',
            'bio' => 'Web Developer with a strong passion for crafting scalable, efficient, and user-centric web applications. Skilled in both front-end and back-end technologies, with a focus on clean architecture, performance optimization, and seamless user experience. Always eager to learn, innovate, and bring ideas to life through code.',
            'email' => 'anouarbenyekhlef669@example.com',
            'phone' => '+212771300601',
            'profile_picture' => 'images/profile.webp',
        ];
    }
}