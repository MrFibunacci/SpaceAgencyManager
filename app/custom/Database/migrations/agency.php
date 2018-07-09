<?php
    namespace app\custom\Database\migrations;

    use app\framework\Component\Database\Migrations\Migration;
    use app\framework\Component\Database\Schema\Blueprint;
    use app\framework\Component\Database\Schema\Schema;

    class agency extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("agency", function(Blueprint $table) {
                $table->increments();
                $table->string('name');
                $table->string('shortage', 5);
                $table->int('creatorId');
                $table->timestamps();
            }, "sam");
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop("agency", "sam");
        }
    }