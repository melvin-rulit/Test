<!-- Блок  Вывода заголовка и используемых версий пакетов-->
<p><img alt="npm" src="https://img.shields.io/npm/v/npm"></p>

![Laravel 8.0](https://img.shields.io/badge/Laravel-8.0-orange)
![GitHub watchers](https://img.shields.io/github/watchers/melvin-rulit/Test?label=watch&style=social)

<h1 align="center">Test</h1>

<!-- Вывод скриншотов  -->


| Register page | Profile page |
| ------------ | ------------- |
|<img src="https://github.com/melvin-rulit/Test/blob/master/screenshot%20project/001.png" width="450">|<img src="https://github.com/melvin-rulit/Test/blob/master/screenshot%20project/002.png" width="450"> |






## Setting up the project



    Clone the repository
    Run composer install
    Configure Laravel directory permissions (documentation)
    Create a database and setup the database configuration inside .env
    Run php artisan key:generate
    Run php artisan migrate
    Run npm install

 ## License

Basically, feel free to use and re-use any way you want.

- - - - -

### DB table migration:

Schema::create('events', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->datetime('start_time');
    $table->datetime('end_time');
    $table->string('recurrence'); // daily/weekly/monthly/none
    $table->unsignedInteger('event_id')->nullable(); // foreign key to itself
    $table->foreign('event_id')->references('id')->on('events');
    $table->timestamps();
    $table->softDeletes();
});
```



<div align=center>

Made with :heart: by [melvin-rulit](https://github.com/melvin-rulit).

</div>