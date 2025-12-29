<?php

namespace Tests\Feature;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;
use App\Models\SystemUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use Tests\TestCase;

class SystemUserTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('passport:keys');
    }

    /**
     * Helper method to create a verified user
     */
    protected function createVerifiedUser(array $attributes = []): SystemUser
    {
        return SystemUser::factory()->create(array_merge([
            'email_verified_at' => now(),
        ], $attributes));
    }

    public function test_admin_can_list_all_users(): void
    {
        $admin = $this->createVerifiedUser([
            'role' => SystemUserRoleEnum::ADMIN,
            'status' => SystemUserStatusEnum::ACTIVE,
        ]);

        SystemUser::factory()->count(5)->create();

        Passport::actingAs($admin);

        $response = $this->getJson('/api/users');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'data' => [
                    'data',
                    'current_page',
                    'total',
                ],
            ]);
    }

    
}
