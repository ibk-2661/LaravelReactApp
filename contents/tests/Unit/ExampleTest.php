<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function testExample(): void
    {
        $this->assertTrue(true);
    }

    public function testConnectDb(): void
    {
        $user = new User([
            'name' => 'name',
            'email' => 'email',
            'password' => 'password'
        ]);
        $this->assertTrue($user->save());
    }
}
