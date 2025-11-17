<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;
use App\Models\Question;
use App\Models\Alternative;

class QuestionModelTest extends TestCase
{

    public function test_question_has_many_alternatives()
    {
        $question = new Question();

        $this->assertInstanceOf(HasMany::class, $question->alternatives());
    }

    public function test_alternatives_relationship_returns_correct_data()
    {
        $question = \Mockery::mock(Question::class)->makePartial();
        $mockAlternatives = \Mockery::mock(\Illuminate\Database\Eloquent\Collection::class);

        $mockAlternatives->shouldReceive('contains')
            ->once()
            ->with('mock-alternative')
            ->andReturn(true);

        $mockAlternatives->shouldReceive('count')
            ->once()
            ->andReturn(1);

        $question->shouldReceive('getRelationValue')
            ->with('alternatives')
            ->andReturn($mockAlternatives);

        $this->assertTrue($question->alternatives->contains('mock-alternative'));
        $this->assertEquals(1, $question->alternatives->count());
    }

    public function test_question_creation_fails_without_required_fields()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Question::create([
            'title' => null,
            'content' => null,
        ]);
    }

    public function test_alternatives_relationship_returns_correct_model()
    {
        $question = new Question();

        $relation = $question->alternatives();

        $this->assertInstanceOf(HasMany::class, $relation);
        $this->assertEquals(Alternative::class, $relation->getRelated()::class);
    }

    public function test_scope_status_filters_by_status_active(){
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('status', 'Active')
            ->andReturnSelf();

        $result = (new Question())->scopeStatus($query, 'Active');

        $this->assertSame($query, $result);
    }

    public function test_scope_status_filters_by_status_inactive(){
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('status', 'Inactive')
            ->andReturnSelf();

        $result = (new Question())->scopeStatus($query, 'Inactive');

        $this->assertSame($query, $result);
    }

    public function test_scope_status_with_invalid_status()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('status', 'InvalidStatus')
            ->andReturnSelf();

        $result = (new Question())->scopeStatus($query, 'InvalidStatus');

        $this->assertSame($query, $result);
    }

    public function test_scope_type_filters_by_type(){
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('type', 'Multipla')
            ->andReturnSelf();

        $result = (new Question())->scopeType($query, 'Multipla');

        $this->assertSame($query, $result);
    }

    public function test_scope_type_with_null_type()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldNotReceive('where');

        $result = (new Question())->scopeType($query, null);

        $this->assertSame($query, $result);
    }

    public function test_scope_type_with_empty_string()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldNotReceive('where');

        $result = (new Question())->scopeType($query, '');

        $this->assertSame($query, $result);
    }

    public function test_scope_search_filters_by_search(){
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with(\Mockery::on(function ($closure) {
                $mockQuery = \Mockery::mock(Builder::class);
                $mockQuery->shouldReceive('where')
                    ->once()
                    ->with('title', 'like', '%example%')
                    ->andReturnSelf();
                $mockQuery->shouldReceive('orWhere')
                    ->once()
                    ->with('content', 'like', '%example%')
                    ->andReturnSelf();

                $closure($mockQuery);

                return true;
            }))
            ->andReturnSelf();

        $result = (new Question())->scopeSearch($query, 'example');

        $this->assertSame($query, $result);
    }

    public function test_scope_search_does_not_apply_filter_when_search_is_empty()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldNotReceive('where');

        $result = (new Question())->scopeSearch($query, '');

        $this->assertSame($query, $result);
    }
}
