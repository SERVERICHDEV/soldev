<?
$dt = date("Y-m-d H:i:s");
include_once "includes/function_send.php";

$git_version_tmp = shell_exec('git --version');
$git_version  = htmlentities(trim($git_version_tmp)) . "\n";

$git_status_tmp = shell_exec('git status');
$git_status = htmlentities(trim($git_status_tmp)) . "\n";

$git_pull_tmp = shell_exec('git pull');
$git_pull = htmlentities(trim($git_pull_tmp)) . "\n";

srai('C54ec3f5f67fd4be664d9349e4bbdf5e0',"Git Update $dt
$git_version
$git_status


$git_pull");
?>
