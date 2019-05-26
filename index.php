<?php 

require_once 'app/start.php';
use Codecourse\Repositories\UserRepository as UserRepository;
use Codecourse\Filters\AuthFilter;

$filter = new AuthFilter();
