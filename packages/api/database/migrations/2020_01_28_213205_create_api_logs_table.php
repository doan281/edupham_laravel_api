<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('requested_at')->nullable()->comment('Thời điểm call api');
            $table->string('from_domain', 255)->nullable()->comment('Gọi từ domain nào');
            $table->string('from_ip', 100)->nullable()->comment('Gọi từ IP nào');
            $table->string('action_name', 255)->nullable()->comment('Tên hàm xử lý');
            $table->text('request')->nullable()->comment('Bản tin request');
            $table->text('response')->nullable()->comment('Bản tin response');
            $table->text('user_agent')->nullable()->comment('Thông tin người call api');
            $table->text('notes')->nullable()->comment('Ghi chú thêm nếu có');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_logs');
    }
}
