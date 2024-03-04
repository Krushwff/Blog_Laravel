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
        Schema::table('tags', function (Blueprint $table) {
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tags', function (Blueprint $table) {

            $table->dropColumn('post_id');
            $table->dropColumn('tag_id');
            //IDX
            $table->dropColumn('post_id', 'post_tag_post_idx');
            $table->dropColumn('tag_id', 'post_tag_tag_idx');

        });
    }
};
