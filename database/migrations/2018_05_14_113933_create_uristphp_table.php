<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUristphpTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Role', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->nullable();
			$table->timestamps();
		});
		DB::table('Role')->insert([
			['id' => '1', 'name' => 'Администратор'],
			['id' => '2', 'name' => 'Руководитель подразделения'],
			['id' => '3', 'name' => 'Руководитель проекта'],
			['id' => '4', 'name' => 'Сотрудник'],
		]);
		
		Schema::create('Subdvision', function (Blueprint $table) {
			$table->increments('id');
			$table->string('Name')->nullable();
			$table->string('Description');
			$table->timestamps();
		});
		
		Schema::create('Status_project', function (Blueprint $table) {
			$table->increments('id');
			$table->text('Description');
			$table->timestamps();
		});
		DB::table('Status_project')->insert([
			['id' => '1', 'Description' => 'Новый',],
			['id' => '2', 'Description' => 'В работе'],
			['id' => '3', 'Description' => 'Завершен'],
		]);
		
		Schema::create('Priority_task', function (Blueprint $table) {
			$table->increments('id');
			$table->text('Description');
			$table->text('Private')->nullable();
			$table->timestamps();
		});
		DB::table('Priority_task')->insert([
			['id' => '1', 'Description' => 'Не важная',],
			['id' => '2', 'Description' => 'Текущая'],
			['id' => '3', 'Description' => 'Важная'],
		]);
		
		Schema::create('Status_task', function (Blueprint $table) {
			$table->increments('id');
			$table->text('name');
			$table->timestamps();
		});
		DB::table('Status_task')->insert([
			['id' => '1', 'name' => 'Новая',],
			['id' => '2', 'name' => 'В работе'],
			['id' => '3', 'name' => 'Завершена'],
		]);
		
		Schema::create('Servise', function (Blueprint $table) {
			$table->increments('id');
			$table->string('Kod');
			$table->string('Name');
			$table->string('Version');
			$table->string('Address');
			$table->timestamps();
		});
		
		Schema::create('User', function (Blueprint $table) {
			$table->increments('id');
			$table->string('login', 50)->unique();
			$table->string('password');
			$table->rememberToken();
			$table->string('Email', 50)->nullable();
			$table->string('Name')->nullable();
			$table->string('Sename')->nullable();
			$table->string('Otchestvo')->nullable();
			$table->string('Pol')->nullable();
			$table->timestamps();
			
			$table->integer('Role_id')->unsigned()->nullable();
			$table->foreign('Role_id')->references('id')->on('Role');
			
			$table->integer('Subdvision_id')->unsigned()->nullable();
			$table->foreign('Subdvision_id')->references('id')->on('Subdvision');
		});
		
		DB::table('User')->insert([
			['id' => '1', 'login' => 'admin', 'Role_id' => '1', 'password' => bcrypt('password'), 'Name' => 'Администратор', 'Role_id' => 1],
		]);
		
		Schema::create('Project', function (Blueprint $table) {
			$table->increments('id');
			$table->string('Name')->nullable();
			$table->datetime('Deadline');
			$table->text('Comment');
			$table->timestamps();
			
			$table->integer('Status_project_id')->unsigned()->nullable();
			$table->foreign('Status_project_id')->references('id')->on('Status_project');
			
			$table->integer('User_id')->unsigned()->nullable();
			$table->foreign('User_id')->references('id')->on('User');
		});
		
		Schema::create('Task', function (Blueprint $table) {
			$table->increments('id');
			$table->string('Header')->nullable();
			$table->string('Description');
			$table->datetime('Short_deadline');
			$table->datetime('Start')->nullable();
			$table->datetime('End')->nullable();
			$table->timestamps();
			
			$table->integer('Project_id')->unsigned()->nullable();
			$table->foreign('Project_id')->references('id')->on('Project');
			
			$table->integer('Priority_task_id')->unsigned()->nullable();
			$table->foreign('Priority_task_id')->references('id')->on('Priority_task');
			
			$table->integer('Status_task_id')->unsigned()->nullable();
			$table->foreign('Status_task_id')->references('id')->on('Status_task');
			
			$table->integer('User_id')->unsigned()->nullable();
			$table->foreign('User_id')->references('id')->on('User');
		});
		
		Schema::create('Files', function (Blueprint $table) {
			$table->increments('id');
			$table->string('File_link');
			$table->timestamps();
			
			$table->integer('Task_id')->unsigned()->nullable();
			$table->foreign('Task_id')->references('id')->on('Task');
		});
		
		Schema::create('Card', function (Blueprint $table) {
			$table->increments('id');
			$table->string('Otvetchik')->nullable();
			$table->string('Istec')->nullable();
			$table->string('executor');
			$table->string('Address_court')->nullable();
			$table->string('Stage_rassmotrenia')->nullable();
			$table->string('Appellate_period')->nullable();
			$table->string('Fines');
			$table->text('Description');
			$table->timestamps();
			
			$table->integer('Task_id')->unsigned()->nullable();
			$table->foreign('Task_id')->references('id')->on('Task');
		});
		
		Schema::create('Connected_Servise', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			
			$table->integer('Subdvision_id')->unsigned()->nullable();
			$table->foreign('Subdvision_id')->references('id')->on('Subdvision');
			
			$table->integer('Servise_id')->unsigned()->nullable();
			$table->foreign('Servise_id')->references('id')->on('Servise');
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
