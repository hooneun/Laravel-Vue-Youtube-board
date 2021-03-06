<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'h';
});

$router->post('/create', 'PostsController@createPost');
$router->get('/posts', 'PostsController@getPosts');
$router->post('/comments/create', 'CommentsController@createComment');
$router->get('/comments/{post_id}', 'Commentscontroller@getComments');
