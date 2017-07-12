<?php
namespace Deployer;
require 'recipe/cakephp.php';

// Configuration

set('ssh_type', 'ssh2');
set('ssh_multiplexing', true);

set('repository', 'git@github.com:joeyrush/joe-cms.git');

add('shared_files', []);
add('shared_dirs', ['webroot/files', 'webroot/fonts']);

add('writable_dirs', []);

// Servers

server('production', 'joerushton.com')
    ->user('guitarpr')
    ->identityFile()
    ->set('deploy_path', '/home/guitarpr/www/joerushton.com/public')
    ->pty(true);


// Tasks
//
// desc('Restart PHP-FPM service');
// task('php-fpm:restart', function () {
//     // The user must have rights for restart service
//     // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
//     run('sudo systemctl restart php-fpm.service');
// });
// after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
