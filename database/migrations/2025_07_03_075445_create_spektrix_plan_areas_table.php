<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_plan_areas', function ( Blueprint $table ) {
            $table->foreignId( 'plan_id' )->constrained( 'spektrix_plans' )->cascadeOnDelete();
            $table->foreignId( 'area_plan_id' )->constrained( 'spektrix_plans' )->cascadeOnDelete();
            $table->primary( [ 'plan_id', 'area_plan_id' ] );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_plan_areas' );
    }
};
