<?
$dt = date("Y-m-d H:i:s");
include "includes/function_send.php";

$git_version_tmp = shell_exec('/usr/bin/git --version');
$git_version = htmlentities(trim($git_version_tmp)) . "\n";

$git_status_tmp = shell_exec('/usr/bin/git status');
$git_status = htmlentities(trim($git_status_tmp)) . "\n";

$git_test_tmp =  system('/usr/bin/git config --list');
$git_test = htmlentities(trim($git_test_tmp)) . "\n";

$git_pull_tmp =  system('/usr/bin/git pull');
$git_pull = htmlentities(trim($git_pull_tmp)) . "\n";

$git_log_tmp =  system("/usr/bin/git log -2 --pretty=format:'%an'");
$git_log = trim($git_log_tmp) . "\n";

srai('C37244567dd2c083720acc025624b5455',"Git Update
$dt on $git_version
==================
$git_status
..................
$git_pull
..................
$git_log
");
?>
