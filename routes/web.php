<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
1) First we created a laravel projet called phnoebookthen we need to install bulma
and vue-router which are installed npm, so we used both commands npm install
vue-router --save then npm install bulma --save then to install all packages in the
node use this command : npm install
3) As bootstrap is no longer needed we should replace it with bulam, so go to
resources/sass/app.scss and replace bootstarp with the the path of node module bulma
folder then use the command npm run watch to check the changes in your files and
save them then remove the bootstrap extension from the bootstrap.js file in the
js folder

4) Now we need to create a github repository to push all files in, so go to the gitignore file and remove everything execept node_modules as we want the git repository to ignore this folder because it has many files and folders within, so when anyone clone this repo all what needs to do is to install the node modules using npm install command then intialize a repository using the command : git init the  push eveything to the master : git remote add origin https://github.com/Bassem-Moustafa-Kamel/phonebook.git then add all files to the repo : git add .

5) No its time to commit all the changes in the files to the repo

 */
