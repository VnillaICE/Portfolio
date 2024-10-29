<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Portfolio::home');
$routes->get('/home', 'Portfolio::home');
$routes->get('/projects', 'Portfolio::projects');
$routes->get('/contact', 'Portfolio::contact');

$routes->post('/submit-form', 'EmailController::submitForm');
