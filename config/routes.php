<?php

use wfm\Router;

Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' => 'admin']);
Router::add('^admin/(?<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['admin_prefix' => 'admin']);
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$', ['controller' => 'Main', 'action' => 'index']);