<h1>Hello</h1>
<h2><?=$name?></h2>
<h3><?=$age?></h3>

<?php foreach ($posts as $post):?>
    <h3><?=$post['title']?></h3>
<?php endforeach;?>

<?php $logs = R::getDatabaseAdapter()
->getDatabase()
->getLogger();

debug( $logs->grep( 'SELECT' ) );?>
