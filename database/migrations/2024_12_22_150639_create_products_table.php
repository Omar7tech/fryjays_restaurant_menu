    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description')->nullable();
                $table->decimal('price', 8, 2)->nullable();
                $table->decimal('small', 8, 2)->nullable()->default(NULL);
                $table->decimal('large', 8, 2)->nullable()->default(NULL);
                $table->decimal('new_price', 8, 2)->nullable()->default(NULL);
                $table->integer('preparation_time')->nullable(); // Time in minutes
                $table->string('image')->nullable();
                $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade'); // Foreign key to categories
                $table->boolean('enabled')->default(true);
                $table->boolean('new')->default(false);
                $table->boolean('top_seller')->default(false);
                $table->boolean('spicy')->default(false);
                $table->boolean('vegetarian')->default(false);
                $table->enum("design" , [1 , 2])->default(1);
                $table->integer("position");
                $table->timestamps();
                $table->index('category_id');
                $table->index('name');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('products');
        }
    };
