<?php

use App\Enums\UserRol;
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
        Schema::table('users', function (Blueprint $table) {
            $table->enum("rol", UserRol::cases())->nullable();
            $table->string("grade")->nullable();
            $table->string("fingerprint")->nullable();
            $table->uuid("UUID")->nullable(); // Indentificadores universales
            $table->integer("document")->unique()->nullable();
            $table->string("document_type")->nullable();

            $table->string("last_login_ip")->nullable();
            $table->timestamp("last_login_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("grade");
            $table->dropColumn("fingerprint");
            $table->dropColumn("UUID");
            $table->dropColumn("document");
            $table->dropColumn("document_type");
            $table->dropColumn("last_login_ip");
            $table->dropColumn("last_login_at");
        });
    }
};
