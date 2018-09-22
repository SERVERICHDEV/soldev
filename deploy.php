<?
$dt = date("Y-m-d H:i:s");
include "includes/function_send.php";

$git_version_tmp = shell_exec('/usr/bin/gitgit --version');
$git_version = htmlentities(trim($git_version_tmp)) . "\n";

$git_status_tmp = shell_exec('/usr/bin/gitgit status');
$git_status = htmlentities(trim($git_status_tmp)) . "\n";

$git_test_tmp =  system('/usr/bin/git config --list');
$git_test = htmlentities(trim($git_test_tmp)) . "\n";

$git_pull_tmp =  system('/usr/bin/git pull');
$git_pull = htmlentities(trim($git_pull_tmp)) . "\n";

$git_log_tmp =  system('/usr/bin/git git log -1');
$git_log = htmlentities(trim($git_log_tmp)) . "\n";


srai('C54ec3f5f67fd4be664d9349e4bbdf5e0',"Git Update
$dt on $git_version
$git_pull
$git_log
");
?>
