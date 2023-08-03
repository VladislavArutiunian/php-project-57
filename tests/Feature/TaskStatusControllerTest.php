<?php

namespace Tests\Feature;

use App\Models\TaskStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskStatusControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testDisplayOnIndex(): void
    {
        $statusesCount = 10;
        TaskStatus::factory($statusesCount)->create();

        $response = $this->get('/task_statuses');

        $response->assertStatus(200);

        $response->assertJsonCount($statusesCount);
    }
}
