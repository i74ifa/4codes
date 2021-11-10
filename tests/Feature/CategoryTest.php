<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function create_category_test()
    {
        $response = $this->post(route('dashboard.category.create'), [
            'name' => 'good',
        ]);
        $this->assertDatabaseHas('categories', ['name' => 'good']);
        $response->assertSessionHas('status', __("Added Success"));
    }

    /** @test  */
    public function validate_create_category()
    {
        $this->post(route('dashboard.category.create'), [
            'name' => 'dd',
        ])->assertStatus(302);
        $this->assertDatabaseHas('categories', ['name' => 'dd']);
    }
}
