<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'miettas');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('170.64.173.253')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/miettas')
    ->set('IdentityFile', '~/.ssh/id_rsa');

// Hooks

after('deploy:failed', 'deploy:unlock');
