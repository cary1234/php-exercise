<?php
/*
Cary note 08/08/22 learning basics of laravel
Youtube tutorial - https://www.youtube.com/watch?v=AEVhR-hD2Wk&ab_channel=MattSocha

Files involve
php-exercise->app->Http->Controllers->TodoListController.php
php-exercise->app->Models->ListItem.php
php-exercise->database->migrations->2022_08_07_002455_create_list_items_table.php
php-exercise->resources->views->* all files inside it
php-exercise->routes->web.php
php-exercise->storage->logs->laravel.log



step by step

install composer
type in terminal the ff command
composer create-project laravel/laravel todoList
cd todoList
php artisan serve //to run server
click link in terminal to access website

create the database named todoList
edit the .env to DB_DATABASE=todoList

creating model
type the ff command
php artisan make:model ListItem -m
php artisan migrate //check if database if ready for the system

open the file 
php-exercise->database->migrations->2022_08_07_002455_create_list_items_table.php
create table by typing this command inside 2022_08_07_002455_create_list_items_table.php

{
        Schema::create('list_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('is_complete');
            $table->timestamps();
        });
}

*ListItem model is the one accessing the table list_items

*Routes is the incharge on redirection from page to page (see more on routes->web.php)


*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('navbar')
</head>

<body>
    <h1>To Do List</h1>

    <!-- Looping to get all the data in list_items table -->
    @foreach ($listItems as $listItem)
    <div>
        <p>Item: {{ $listItem->name}}</p>
        <form method="post" action="{{ route('markComplete', $listItem->id) }}" accept-charset="UTF-8">
            {{ csrf_field() }}
            <button type="submit" style="max-height: 25px; margin-left: 20px;">Mark Complete</button>
        </form>
    </div>
    @endforeach

    <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
        {{ csrf_field() }} <?php //always needed on every form for laravel security 
                            ?>
        <label for="listItem">New Todo Item</label>
        <br />
        <input type="text" name="listItem">
        <br />
        <button type="submit">Save Item</button>
    </form>
</body>

</html>