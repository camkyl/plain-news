<?php require __DIR__.'/data.php' ?>
<?php require __DIR__.'/functions.php' ?>
<?php require __DIR__.'/header.php' ?>

<?php usort($articles, 'sortByLatestDate'); // sort array $articles with given user-defined function ?>

<section>
    
<?php foreach ($articles as $article) : ?>

    <article>
        <div class="main">
            <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']?>" loading="lazy" class="articleImage">
            <div class="content">
                <h2><?php echo $article['title']; ?></h2>
                <p class="text"><?php echo $article['content']; ?></p>
            </div>
        </div>

        <div class="bottomInfo">
            <div class="bottomLeft">
                <h6>Author:</h6>
                <h4><?php echo $article['author']; ?></h4>
            </div>
            <div class="bottomRight">
                <p class="date"><?php echo $article['publishDate']; ?></p>
                <div class="liking">
                    <img src="/images/heart.svg" loading="lazy" class="heart">
                    <p class="likes"><?php echo randomLikes(); ?></p>
                </div>
            </div>
        </div>

        
    </article>

<?php endforeach; ?>

</section><!--End of section starting on line 13-->

<?php require __DIR__.'/footer.php' ?>
