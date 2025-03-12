<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('instructor_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnDelete();
            $table->foreignIdFor(Category::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            // $table->foreignId('subcategory_id')
            //     ->nullable()
            //     ->constrained('categories')
            //     ->cascadeOnDelete();
            // $table->bigInteger('course_language_id')->nullable();
            // $table->bigInteger('difficulty_level_id')->nullable();
            $table->string('title');
            $table->mediumText('description');
            $table->mediumText('feature_details')->nullable();
            $table->decimal('price')->default(0.00);
            $table->enum('learner_accessibility', ['paid', 'free'])->default('free');
            $table->string('image')->nullable();
            $table->string('slug');
            $table->enum('status', ['0', '1', '2', '3', '4'])->default('0')->comment('0=pending, 1=published, 2=waiting_for_review, 3=hold, 4=draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
