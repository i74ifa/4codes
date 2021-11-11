<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function create_product_test()
    {

        $file = UploadedFile::fake()->image('avatar.jpg');
        $response = $this->post(route('dashboard.products.create'), [
            'title' => 'this is title',
            'image' => $file,
            'price' => 500,
            'details' => 'details',
            'category_id' => 1,
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('products', [
            'title' => 'this is title',
            'price' => 500,
            'category_id' => 1
        ]);


    }
}
