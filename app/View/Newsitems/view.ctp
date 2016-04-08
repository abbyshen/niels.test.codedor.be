<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($news['Newsitem']['title']); ?></h1>

<p><small>Created: <?php echo $news['Newsitem']['created']; ?></small></p>

<p><?php echo h($news['Newsitem']['body']); ?></p>