<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_customers', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'spektrix_id' )->unique();
            $table->string( 'first_name' );
            $table->string( 'last_name' );
            $table->string( 'title' )->nullable();
            $table->string( 'email' )->nullable();
            $table->string( 'mobile_original' )->nullable();
            $table->string( 'mobile_canonical' )->nullable()->index();
            $table->boolean( 'is_mobile_valid' )->default( false );
            $table->string( 'phone_original' )->nullable();
            $table->string( 'phone_canonical' )->nullable()->index();
            $table->boolean( 'is_phone_valid' )->default( false );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_customers' );
    }
};
