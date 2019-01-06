<?php
namespace Deployer;

require 'recipe/cakephp.php';

// Configuration
set('application', 'joerushton.com');

set('repository', 'git@github.com:joeyrush/joe-cms.git');

add('shared_files', ['config/app.php']);
add('shared_dirs', ['webroot/files', 'webroot/fonts', 'webroot/twitter']);
add('writable_dirs', []);

set('git_tty', false);

set('composer_action', '');
set('composer_options', 'install --optimize-autoloader --no-dev --ignore-platform-reqs');

// don't use sudo in writable commands
set('writable_use_sudo', false);
set('writable_mode', "chmod");

// Servers
host('naturalornot.co.uk')
    ->user('naturalo')
    ->port(722)
    ->multiplexing(true)
    ->set('deploy_path', '~/{{application}}');

// overridden from the cake recipe to not run the cake shell due to permission issue
task('deploy:init', function () {
    // run('{{release_path}}/bin/cake plugin assets symlink');
})->desc('Initialization');

// overridden from the cake recipe to not run the cake shell due to permission issue
task('deploy:run_migrations', function () {
    // run('{{release_path}}/bin/cake migrations migrate');
    // run('{{release_path}}/bin/cake orm_cache clear');
    // run('{{release_path}}/bin/cake orm_cache build');
})->desc('Run migrations');

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
