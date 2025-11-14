<?php

namespace Database\Seeders;

use App\Models\QuestionCollection;
use Illuminate\Database\Seeder;

class QuestionCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionCollection::factory()
            ->count(3)
            ->asSimulation()
            ->withQuestions(rand(5, 10))
            ->create();

        QuestionCollection::factory()
            ->count(2)
            ->asExam()
            ->withQuestions(rand(15, 20))
            ->create();

        QuestionCollection::factory()
            ->count(4)
            ->asActivity()
            ->withQuestions(rand(3, 8))
            ->create();

        QuestionCollection::factory()
            ->count(3)
            ->asExercise()
            ->withQuestions(rand(5, 15))
            ->create();
    }
}