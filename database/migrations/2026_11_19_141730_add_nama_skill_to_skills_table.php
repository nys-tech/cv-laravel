
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('skills', 'nama_skill')) {
            Schema::table('skills', function (Blueprint $table) {
                $table->string('nama_skill')->after('id');
            });
        }
    }

    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            if (Schema::hasColumn('skills', 'nama_skill')) {
                $table->dropColumn('nama_skill');
            }
        });
    }
};
