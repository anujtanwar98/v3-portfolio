<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/header.php';
?>
<?php include_once __DIR__ . '/navbar.php'; ?>

<main class="main-container">
    <div class="section-one">
        <div class="main-image">
            <img class="main-image" src="<?php echo site_url(); ?>/asset/images/anuj-tanwar-image.png" alt="image of anuj tanwar">
        </div>
        <div class="intro">
            <div class="text-center">
                <h1 class="text-black main-title">Hello I'm Anuj Tanwar!</h1>
            </div>
            <div class="text-main">
                <p class="text-black">
                    I am an aspiring web developer with a passion for creating beautiful and functional websites. I am pursing my bachelor's degree in User Experience and Interaction Design. I have experience working with a variety of technologies and frameworks including PHP, MySQL, HTML, CSS, JavaScript, jQuery, ReactJs, Angular Bootstrap, and WordPress.
                </p>
            </div>
        </div>
    </div>
</main>

<?php include_once __DIR__ . '/footer.php'; ?>