<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$90,000 - $120,000',
                'description' => 'We are looking for a skilled Software Engineer to join our team. You will be responsible for developing high-quality applications and collaborating with cross-functional teams.',
            ],
            [
                'id' => 2,
                'title' => 'Product Manager',
                'salary' => '$100,000 - $140,000',
                'description' => 'We are seeking an experienced Product Manager to lead the development and launch of our new products. You will work closely with engineering, design, and marketing teams to ensure successful product delivery.',
            ],
            [
                'id' => 3,
                'title' => 'UX Designer',
                'salary' => '$80,000 - $110,000',
                'description' => 'We are in need of a creative UX Designer to help us design intuitive and engaging user experiences. You will collaborate with product managers and developers to create user-centered designs.',
            ],
        ];
    }

    public static function find($id)
    {
        $job =  Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (!$job) {
            return abort(404);
        }

        return $job;
    }
}