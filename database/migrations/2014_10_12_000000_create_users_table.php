<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateUsersTable extends Migration
=======
return new class extends Migration
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< HEAD
            $table->boolean('admin')->default(false);
=======
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
