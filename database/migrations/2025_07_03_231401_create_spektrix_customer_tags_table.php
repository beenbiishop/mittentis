<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_customer_tags', function ( Blueprint $table ) {
            $table->foreignId( 'customer_id' )->constrained( 'spektrix_customers' )->cascadeOnDelete();
            $table->foreignId( 'tag_id' )->constrained( 'spektrix_tags' )->cascadeOnDelete();
            $table->primary( [ 'customer_id', 'tag_id' ] );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_customer_tags' );
    }
};
