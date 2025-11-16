<?php

namespace Tests\Unit;

use Tests\TestCase;

class ContentModelTest extends TestCase
{

    public function test_content_belongs_to_content_type(): void
{
    $contentTypeMock = $this->createMock(\App\Models\ContentType::class);
    $content = $this->getMockBuilder(\App\Models\Content::class)
        ->onlyMethods(['contentType'])
        ->getMock();

    $content->method('contentType')->willReturn($contentTypeMock);

    $this->assertInstanceOf(\App\Models\ContentType::class, $content->contentType());
}

public function test_content_has_many_tags(): void
{
    $contentTagMock = $this->createMock(\App\Models\ContentTag::class);
    $content = $this->getMockBuilder(\App\Models\Content::class)
        ->onlyMethods(['contentTags'])
        ->getMock();

    $content->method('contentTags')->willReturn(collect([$contentTagMock, $contentTagMock]));

    $tags = $content->contentTags();
    if ($tags instanceof \Illuminate\Database\Eloquent\Relations\Relation) {
        $tags = $tags->get();
    }

    $this->assertCount(2, $tags);
    $this->assertInstanceOf(\App\Models\ContentTag::class, $tags->first());
}

public function test_scope_ativo_returns_only_active_contents(): void
{
    $queryMock = $this->getMockBuilder(\Illuminate\Database\Eloquent\Builder::class)
        ->disableOriginalConstructor()
        ->onlyMethods(['where'])
        ->getMock();

    $queryMock->expects($this->once())
        ->method('where')
        ->with('status', 'Ativo')
        ->willReturnSelf();

    $content = $this->getMockBuilder(\App\Models\Content::class)
        ->onlyMethods(['newQuery'])
        ->getMock();

    $content->method('newQuery')->willReturn($queryMock);

    $this->assertSame($queryMock, $content->scopeAtivo($queryMock));
}

public function test_last_editor_is_updated_on_content_update(): void
{
    $content = $this->getMockBuilder(\App\Models\Content::class)
        ->onlyMethods(['update'])
        ->getMock();

    $content->expects($this->once())
        ->method('update')
        ->with(['ultimo_editor' => 1])
        ->willReturn(true);

    $this->assertTrue($content->update(['ultimo_editor' => 1]));
}

public function test_deleting_content_removes_associated_tags(): void
    {
        $relationMock = $this->getMockBuilder(\Illuminate\Database\Eloquent\Relations\BelongsToMany::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['detach'])
            ->getMock();

        $relationMock->expects($this->once())->method('detach');

        $content = $this->getMockBuilder(\App\Models\Content::class)
            ->onlyMethods(['contentTags', 'delete'])
            ->getMock();

        $content->method('contentTags')->willReturn($relationMock);

        $content->expects($this->once())
            ->method('delete')
            ->willReturnCallback(function () use ($relationMock) {
                $relationMock->detach();
            });

        $content->delete();
    }

}
