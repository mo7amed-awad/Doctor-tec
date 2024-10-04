<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobileNumber');
            $table->date('birthDate')->nullable();
            $table->float('age')->nullable();
            $table->enum('specialization', ['جراحة سمنة ومناظير','جراحة عامة','جراحة عمود فقري','جراحة قلب وصدر','جراحة مخ واعصاب','جهاز هضمي ومناظير',
            'حساسية ومناعة','حقن مجهري واطفال انابيب','ذكورة وعقم','روماتيزم','سكر وغدد صماء','سمعيات','صدر وجهاز تنفسي','طب الأسرة'
            ,'طب المسنين','طب تقويمي','علاج الآلام','علاج طبيعي واصابات ملاعب','جلدية','أسنان','نفسي','اطفال وحديثي الولادة','مخ واعصاب','عظام','نساء وتوليد',
            'انف واذن وحنجرة','قلب واوعية دموية','الآشعة التداخلية','امراض دم','اورام','باطنة','تخسيس وتغذية','جراحة اطفال','جراحة أورام','جراحة اوعية دموية',
            'جراحة تجميل','عيون','كبد','كلى','مراكز أشعة','مسالك بولية','معامل تحاليل','ممارسة عامة','
            نطق وتخاطب'])->default('جراحة عامة');
            $table->string('province');//المحافظة
            $table->string('city');
            $table->string('brief');
            $table->string('appoinment');
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('certification')->nullable();
            $table->enum('status',['acceptable','notyet','refused'])->default('notyet');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('doctors');
    }
}
