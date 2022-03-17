<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up()
{
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('contact_no');
        $table->string('age');
        $table->string('adress');
       
    });
}
    public function down()
    {
    Schema::dropIfExists('employees');
    }
};
