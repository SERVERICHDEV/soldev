<?

require_once('Git.php');

$repo = Git::open('/path/to/repo');  // -or- Git::create('/path/to/repo')

// $repo->add('.');
// $repo->commit('Some commit message');
$repo->pull('origin', 'master');

?>
