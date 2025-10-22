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
            'bio' => 'Passionate about building scalable and user-friendly web applications.',
            'email' => 'anouarbenyekhlef669@example.com',
            'phone' => '+212771300601',
            'profile_picture' => '/images/profile.jpg',
        ];
    }
}
