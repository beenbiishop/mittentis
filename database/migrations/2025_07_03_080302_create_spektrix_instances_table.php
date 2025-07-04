<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_instances', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'team_id' )->constrained()->cascadeOnDelete();
            $table->string( 'spektrix_id' )->unique();
            $table->string( 'web_instance_id' )->nullable();
            $table->boolean( 'is_on_sale' );
            $table->foreignId( 'plan_id' )->constrained( 'spektrix_plans' )->restrictOnDelete();
            $table->dateTime( 'start' );
            $table->dateTime( 'start_selling_at_web' )->nullable();
            $table->dateTime( 'start_selling_at_sales' )->nullable();
            $table->dateTime( 'stop_selling_at_web' )->nullable();
            $table->dateTime( 'stop_selling_at_sales' )->nullable();
            $table->boolean( 'cancelled' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_instances' );
    }
};
