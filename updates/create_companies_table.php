<?php namespace AzahariZaman\Organization\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCompaniesTable Migration
 */
class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('az_organization_companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('az_organization_companies');
    }
}
