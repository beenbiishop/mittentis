<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_plan_area', function ( Blueprint $table ) {
            $table->foreignId( 'spektrix_plan_id' )->constrained()->cascadeOnDelete();
            $table->foreignId( 'area_spektrix_plan_id' )->constrained( 'spektrix_plans' )->cascadeOnDelete();
            $table->primary( [ 'spektrix_plan_id', 'area_spektrix_plan_id' ] );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_plan_area' );
    }
};
