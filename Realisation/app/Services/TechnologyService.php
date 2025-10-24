<?php

namespace App\Services;

class TechnologyService
{
    public function getTechnologies()
    {
        return [
            ['id' => 1, 'name' => 'HTML'],
            ['id' => 2, 'name' => 'CSS'],
            ['id' => 3, 'name' => 'JS'],
            ['id' => 4, 'name' => 'PHP'],
            ['id' => 5, 'name' => 'Laravel'],
            ['id' => 6, 'name' => 'SQL'],
            ['id' => 7, 'name' => 'Python'],
            ['id' => 8, 'name' => 'React'],
            ['id' => 9, 'name' => 'Tailwind CSS'],
            ['id' => 10, 'name' => 'Vite'],
            ['id' => 11, 'name' => 'Supabase'],
        ];
    }

    public function getByIds($ids)
    {
        $all = $this->getTechnologies();
        return array_filter($all, fn($tech) => in_array($tech['id'], $ids));
    }
}