$router->get('/stories', 'StoriesController::index');
$router->get('/story/(:num)', 'StoriesController::view');
$router->match('/stories/add', 'StoriesController::add', 'GET|POST');
$router->match('/stories/edit/(:num)', 'StoriesController::edit', 'GET|POST');
$router->get('/stories/delete/(:num)', 'StoriesController::delete');
