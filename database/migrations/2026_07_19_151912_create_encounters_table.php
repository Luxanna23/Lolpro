<?php

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
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Model::class); //tracked_account_id
            $table->foreignIdFor(App\Models\Model::class); //pro_account_id
            $table->foreignIdFor(App\Models\Model::class); //game_match_id
            $table->unique('id','id','');// unique ici
            $table->string('side');
            $table->string('champion');
            $table->boolean('win');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encounters');
    }
};
