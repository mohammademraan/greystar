<?php

namespace Tests\Feature;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MembershipCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_create_update_and_delete_membership(): void
    {
        $admin = User::factory()->create([
            'user_type' => 1,
        ]);

        $this->actingAs($admin);

        $this->post('/create-memberships', [
            'membership' => 'Gold',
            'order_limit' => 10,
            'commission' => 15,
        ])->assertRedirect('/memberships');

        $membership = Membership::first();

        $this->assertNotNull($membership);
        $this->assertEquals('Gold', $membership->level_name);
        $this->assertEquals(10, $membership->order_limit);
        $this->assertEquals(15, $membership->commission);

        $this->post('/update-memberships/' . $membership->id, [
            'membership' => 'Platinum',
            'order_limit' => 20,
            'commission' => 25,
        ])->assertRedirect('/memberships');

        $this->assertDatabaseHas('memberships', [
            'id' => $membership->id,
            'level_name' => 'Platinum',
            'order_limit' => 20,
            'commission' => 25,
        ]);

        $this->get('/delete-memberships/' . $membership->id)->assertRedirect('/memberships');

        $this->assertDatabaseMissing('memberships', [
            'id' => $membership->id,
        ]);
    }
}
