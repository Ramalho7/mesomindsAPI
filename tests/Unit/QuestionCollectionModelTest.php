<?php

namespace Tests\Unit;

use App\Models\Question;
use App\Models\QuestionCollection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Tests\TestCase;

class QuestionCollectionModelTest extends TestCase
{
    public function test_questions_relationship_returns_correct_model()
    {
        $questionCollection = new QuestionCollection;

        $relation = $questionCollection->questions();

        $this->assertInstanceOf(BelongsToMany::class, $relation);
        $this->assertEquals(Question::class, $relation->getRelated()::class);
    }

    public function test_questions_relationship_returns_correct_data()
    {
        $collection = \Mockery::mock(QuestionCollection::class)->makePartial();
        $mockQuestions = \Mockery::mock(\Illuminate\Database\Eloquent\Collection::class);

        $mockQuestions->shouldReceive('contains')
            ->once()
            ->with('mock-question')
            ->andReturn(true);

        $mockQuestions->shouldReceive('count')
            ->once()
            ->andReturn(2);

        $collection->shouldReceive('getRelationValue')
            ->with('questions')
            ->andReturn($mockQuestions);

        $this->assertTrue($collection->questions->contains('mock-question'));
        $this->assertEquals(2, $collection->questions->count());
    }

    public function test_question_collection_creation_fails_without_required_fields()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        QuestionCollection::create([
            'title' => null,
            'content' => null,
        ]);
    }

    public function test_scope_status_filters_by_status_active()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('status', 'Active')
            ->andReturnSelf();

        $result = (new QuestionCollection)->scopeStatus($query, 'Active');

        $this->assertSame($query, $result);
    }

    public function test_scope_status_filters_by_status_inactive()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('status', 'Inactive')
            ->andReturnSelf();

        $result = (new QuestionCollection)->scopeStatus($query, 'Inactive');

        $this->assertSame($query, $result);
    }

    public function test_scope_status_with_invalid_status()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('status', 'InvalidStatus')
            ->andReturnSelf();

        $result = (new QuestionCollection)->scopeStatus($query, 'InvalidStatus');

        $this->assertSame($query, $result);
    }

    public function test_scope_type_with_null_type()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldNotReceive('where');

        $result = (new QuestionCollection)->scopeType($query, null);

        $this->assertSame($query, $result);
    }

    public function test_scope_type_with_empty_string()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldNotReceive('where');

        $result = (new QuestionCollection)->scopeType($query, '');

        $this->assertSame($query, $result);
    }

    public function test_scope_type_exam_filters_by_type()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('type', 'Exam')
            ->andReturnSelf();

        $result = (new QuestionCollection)->scopeType($query, 'Exam');

        $this->assertSame($query, $result);
    }

    public function test_scope_type_simulation_filters_by_type()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldReceive('where')
            ->once()
            ->with('type', 'Simulation')
            ->andReturnSelf();

        $result = (new QuestionCollection)->scopeType($query, 'Simulation');

        $this->assertSame($query, $result);
    }

    public function test_scope_search_filters_by_search()
    {
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
                    ->with('description', 'like', '%example%')
                    ->andReturnSelf();

                $closure($mockQuery);

                return true;
            }))
            ->andReturnSelf();

        $result = (new QuestionCollection)->scopeSearch($query, 'example');

        $this->assertSame($query, $result);
    }

    public function test_scope_search_does_not_apply_filter_when_search_is_empty()
    {
        $query = \Mockery::mock(Builder::class);

        $query->shouldNotReceive('where');

        $result = (new QuestionCollection)->scopeSearch($query, '');

        $this->assertSame($query, $result);
    }
}
