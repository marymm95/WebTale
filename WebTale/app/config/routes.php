<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 * MIT License
 * Copyright (c) 2020 Ronald M. Marasigan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
 * USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
| Usage:
| $router->get('/path', 'Controller::method');
| $router->post('/path', 'Controller::method');
| $router->match('/path', 'Controller::method', 'GET|POST');
*/

$router = new Router(); // Ensure $router is properly initialized

$router = new Router(); // Ensure $router is properly initialized

// Define your routes
$router->get('/', 'Welcome::index'); // Default page
$router->get('/login', 'AuthController::login'); // Login page
$router->get('/register', 'AuthController::register'); // Registration page
$router->match('/register/submit', 'AuthController::register', 'GET|POST'); // Handle registration form
$router->match('/log', 'AuthController::login', 'GET|POST'); // Handle login form
$router->match('/email', 'EmailController::sendEmail', 'GET|POST'); // Email sending
$router->get('/homepage', 'HomepageController::index'); // Homepage after login
$router->get('/logout', 'AuthController::logout');

$router->get('/stories', 'StoriesController::index'); // List all stories
$router->get('/story/(:num)', 'StoriesController::view'); // View a specific story
$router->match('/stories/add', 'StoriesController::add', 'GET|POST'); // Add a new story
$router->match('/stories/edit/(:num)', 'StoriesController::edit', 'GET|POST'); // Edit a story
$router->get('/stories/delete/(:num)', 'StoriesController::delete'); // Delete a story
$router->get('/stories', 'StoriesController::index'); 