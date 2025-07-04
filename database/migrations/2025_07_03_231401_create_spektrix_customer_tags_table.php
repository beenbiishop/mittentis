<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_customer_spektrix_tag', function ( Blueprint $table ) {
            $table->foreignId( 'spektrix_customer_id' )->constrained()->cascadeOnDelete();
            $table->foreignId( 'spektrix_tag_id' )->constrained()->cascadeOnDelete();
            $table->primary( [ 'spektrix_customer_id', 'spektrix_tag_id' ] );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_customer_spektrix_tag' );
    }
};
