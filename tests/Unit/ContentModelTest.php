<?php

namespace Tests\Unit;

use App\Models\Content;
use App\Models\ContentTag;
use App\Models\ContentType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContentModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_content_belongs_to_content_type(): void
    {
        $type = ContentType::factory()->create();
        $content = Content::factory()->create(['content_types_id' => $type->id]);

        $this->assertEquals($type->id, $content->contentType->id);
    }

    public function test_content_has_many_tags(): void
    {
        $content = Content::factory()->withTags(2)->create();

        $this->assertCount(2, $content->contentTags);
        $this->assertInstanceOf(ContentTag::class, $content->contentTags->first());
    }

    public function test_content_belongs_to_creator(): void
    {
        $creator = \App\Models\SystemUser::factory()->create();
        $content = Content::factory()->create(['criador' => $creator->id]);

        $this->assertEquals($creator->id, $content->creator->id);
        $this->assertInstanceOf(\App\Models\SystemUser::class, $content->creator);
    }

    public function test_content_belongs_to_last_editor(): void
    {
        $editor = \App\Models\SystemUser::factory()->create();
        $content = Content::factory()->create(['ultimo_editor' => $editor->id]);

        $this->assertEquals($editor->id, $content->lastEditor->id);
        $this->assertInstanceOf(\App\Models\SystemUser::class, $content->lastEditor);
    }

    public function test_scope_ativo_returns_only_active_contents(): void
    {
        Content::factory()->create(['status' => 'Ativo']);
        Content::factory()->create(['status' => 'Inativo']);

        $activeContents = Content::Ativo()->get();

        $this->assertCount(1, $activeContents);
        $this->assertEquals('Ativo', $activeContents->first()->status);
    }

    public function test_deleting_content_removes_associated_tags(): void
    {
        $content = Content::factory()->withTags(2)->create();

        $this->assertCount(2, $content->contentTags);

        $content->delete();

        $this->assertDatabaseMissing('content_tags', ['content_id' => $content->id]);
    }

    public function test_last_editor_is_updated_on_content_update(): void
    {
        $editor = \App\Models\SystemUser::factory()->create();
        $content = Content::factory()->create();

        $content->update(['ultimo_editor' => $editor->id]);

        $this->assertEquals($editor->id, $content->ultimo_editor);
    }
}
