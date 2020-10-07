<?php

require 'vendor/luyadev/luya-deployer/luya.php';

task('rollback:custom', function(){
    $releases = env('releases_list');

    if (isset($releases[1])) {
        $releaseDir = "{{deploy_path}}/releases/{$releases[1]}/public_html";

        // Symlink to old release.
        run("cd {{deploy_path}} && ln -nfs $releaseDir public_html");

        // Remove release
        run("rm -rf {{deploy_path}}/releases/{$releases[0]}");

        if (isVerbose()) {
            writeln("Rollback to `{$releases[1]}` release was successful.");
        }
    } else {
        writeln("<comment>No more releases you can revert to.</comment>");
    }
})->desc('Custom rollback');

task('symlink:custom', function(){
    run("cd {{deploy_path}} && rm -rf public_html");
    run("cd {{deploy_path}} && ln -sfn {{release_path}}/public_html public_html"); // Atomic override symlink.
    run("cd {{deploy_path}} && rm -rf current");
    run("cd {{deploy_path}} && ln -sfn {{release_path}} current");
    //run("cd {{deploy_path}} && curl http://bloom.usermd.net/test.php");
})->desc('Custom symlink');

after('rollback', 'rollback:custom');
after('deploy:symlink', 'symlink:custom');

// DEV environment
// server('prep', 's104.linuxpl.com', 222)
//     ->user('perchon')
//     ->password('pZfgKW1Rv2z')
//     ->stage('dev')
//     ->env('deploy_path', '/home/perchon/domains/pdrperfect.com/');

// Production environment
server('dev', 's48.mydevil.net', 22)
    ->user('bloom')
    ->password('cPM3%Mr7&95(Vt2ppNV$')
    ->stage('dev')
    ->env('deploy_path', '/home/bloom/domains/iro.bloom.usermd.net');

set('repository', 'https://damiansky:Biti12390,@github.com/damiansky/IROVRDEPLOY.git');
