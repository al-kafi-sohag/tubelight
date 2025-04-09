<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Technology',
            'Health',
            'Travel',
            'Food',
            'Education',
            'Agriculture',
            'Fashion',
            'Sports',
            'Entertainment',
            'Finance',
            'Lifestyle',
            'Science',
            'Politics',
            'Environment',
            'History',
            'Art',
            'Culture',
            'Business',
            'Real Estate',
            'Automotive',
            'Gaming',
            'Music',
            'Photography',
            'Writing',
            'Web Development',
            'Graphic Design',
            'Social Media',
            'Marketing',
            'E-commerce',
            'Cryptocurrency',
            'Artificial Intelligence',
            'Machine Learning',
            'Virtual Reality',
            'Augmented Reality',
            'Blockchain',
            'Cloud Computing',
            'Cybersecurity',
            'Data Science',
            'Big Data',
            'Internet of Things',
            'Mobile Development',
            'Software Development',
            'DevOps',
            'Agile',
            'Project Management',
            'User Experience',
            'User Interface',
            'Content Creation',
            'SEO',
            'Email Marketing',
            'Affiliate Marketing',
            'Digital Marketing',
            'Public Relations',
            'Branding',
            'Advertising',
            'Market Research',
            'Customer Service',
            'Sales',
            'Entrepreneurship',
        ];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
