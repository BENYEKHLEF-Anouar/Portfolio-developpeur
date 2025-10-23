<?php

namespace App\Services;

class TechnologyService
{
    public function getTechnologies()
    {
        return [
            ['id' => 1, 'name' => 'Laravel'],
            ['id' => 2, 'name' => 'js'],
            ['id' => 3, 'name' => 'Tailwind CSS'],
            ['id' => 4, 'name' => 'MySQL'],
        ];
    }

    public function getByIds($ids)
    {
        $all = $this->getTechnologies();
        return array_filter($all, fn($tech) => in_array($tech['id'], $ids));
    }
}
