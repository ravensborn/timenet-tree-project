<?php

namespace Database\Seeders;

use App\Models\Tree;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $trees = [
            [
                'name' => 'Oak',
                'description' => 'Oak trees are known for their strength and longevity.',
                'maintenance_instructions' => 'Water regularly, especially in dry periods.',
                'stock' => 50,
                'price' => 100000,
            ],
            [
                'name' => 'Maple',
                'description' => 'Maple trees are famous for their beautiful fall foliage.',
                'maintenance_instructions' => 'Prefers full sun and well-drained soil.',
                'stock' => 30,
                'price' => 80000,
            ],
            [
                'name' => 'Pine',
                'description' => 'Pine trees are evergreen and provide year-round greenery.',
                'maintenance_instructions' => 'Plant in acidic soil with good drainage.',
                'stock' => 60,
                'price' => 90000,
            ],
            [
                'name' => 'Cherry Blossom',
                'description' => 'Cherry Blossom trees are known for their beautiful spring flowers.',
                'maintenance_instructions' => 'Requires full sun and moist, well-drained soil.',
                'stock' => 20,
                'price' => 120000,
            ],
            [
                'name' => 'Birch',
                'description' => 'Birch trees have distinctive white bark and are fast-growing.',
                'maintenance_instructions' => 'Thrives in full sun and cool, moist soil.',
                'stock' => 40,
                'price' => 70000,
            ],
            [
                'name' => 'Cedar',
                'description' => 'Cedar trees are tall and provide excellent wood for construction.',
                'maintenance_instructions' => 'Prefers full sun and well-drained soil.',
                'stock' => 15,
                'price' => 150000,
            ],
            [
                'name' => 'Apple',
                'description' => 'Apple trees produce delicious fruits and beautiful blossoms.',
                'maintenance_instructions' => 'Requires full sun and regular pruning.',
                'stock' => 25,
                'price' => 110000,
            ],
            [
                'name' => 'Magnolia',
                'description' => 'Magnolia trees have large, fragrant flowers.',
                'maintenance_instructions' => 'Prefers full sun and well-drained soil.',
                'stock' => 35,
                'price' => 130000,
            ],
            [
                'name' => 'Dogwood',
                'description' => 'Dogwood trees are known for their spring blooms and red berries.',
                'maintenance_instructions' => 'Prefers partial shade and well-drained soil.',
                'stock' => 45,
                'price' => 85000,
            ],
            [
                'name' => 'Redwood',
                'description' => 'Redwood trees are among the tallest and oldest trees in the world.',
                'maintenance_instructions' => 'Requires deep, well-drained soil.',
                'stock' => 10,
                'price' => 200000,
            ],
            [
                'name' => 'Palm',
                'description' => 'Palm trees are iconic in tropical landscapes.',
                'maintenance_instructions' => 'Requires well-drained soil and regular watering.',
                'stock' => 50,
                'price' => 95000,
            ],
            [
                'name' => 'Willow',
                'description' => 'Willow trees are known for their graceful, drooping branches.',
                'maintenance_instructions' => 'Prefers moist soil and full sun.',
                'stock' => 20,
                'price' => 90000,
            ],
            [
                'name' => 'Spruce',
                'description' => 'Spruce trees are evergreen and have a distinctive conical shape.',
                'maintenance_instructions' => 'Requires full sun and well-drained soil.',
                'stock' => 30,
                'price' => 85000,
            ],
            [
                'name' => 'Holly',
                'description' => 'Holly trees are known for their bright red berries and glossy leaves.',
                'maintenance_instructions' => 'Prefers partial shade and well-drained soil.',
                'stock' => 40,
                'price' => 75000,
            ],
            [
                'name' => 'Fig',
                'description' => 'Fig trees produce sweet fruits and have large, lobed leaves.',
                'maintenance_instructions' => 'Requires full sun and well-drained soil.',
                'stock' => 25,
                'price' => 10000,
            ],
            [
                'name' => 'Juniper',
                'description' => 'Juniper trees are evergreen and have needle-like leaves.',
                'maintenance_instructions' => 'Thrives in full sun and well-drained soil.',
                'stock' => 35,
                'price' => 60000,
            ],
            [
                'name' => 'Olive',
                'description' => 'Olive trees produce olives and have silvery-green leaves.',
                'maintenance_instructions' => 'Requires full sun and well-drained soil.',
                'stock' => 15,
                'price' => 140000,
            ],
            [
                'name' => 'Plum',
                'description' => 'Plum trees produce delicious fruits and beautiful spring blossoms.',
                'maintenance_instructions' => 'Requires full sun and regular pruning.',
                'stock' => 20,
                'price' => 105000,
            ],
            [
                'name' => 'Cypress',
                'description' => 'Cypress trees are known for their durability and distinctive shape.',
                'maintenance_instructions' => 'Prefers full sun and well-drained soil.',
                'stock' => 45,
                'price' => 95000,
            ],
            [
                'name' => 'Lemon',
                'description' => 'Lemon trees produce citrus fruits and have fragrant blossoms.',
                'maintenance_instructions' => 'Requires full sun and regular watering.',
                'stock' => 25,
                'price' => 115000,
            ],
        ];

        DB::table('trees')->insert($trees);

        foreach (Tree::all() as $index => $tree) {
            $tree->addMedia(public_path('trees/' . $index + 1 . '-min.png'))->toMediaCollection('cover');
        }
    }
}
