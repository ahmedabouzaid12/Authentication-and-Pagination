<?php require_once ('inc/header.php'); ?>
<!-- Page Header-->
<style>
    .masthead {
    position: relative;
    margin-bottom: 3rem;
    padding-top: 10rem; /* Adjusted for better spacing */
    padding-bottom: 6rem; /* Increased bottom padding */
    background: no-repeat center center;
    background-size: cover;
    min-height: 80vh; /* Makes it occupy 80% of the viewport height */
    color: white; /* Changed text color to white for better contrast */
    text-align: center; /* Center align text */
}

.page-heading h1 {
    font-size: 6rem; /* Adjust the size as needed */
    font-weight: bold; /* Make it bold for emphasis */
}

.subheading {
    font-size: 1.5rem; /* Slightly larger for better visibility */
}

.main-content h2 {
    font-size: 2.5rem; /* Larger subheading */
    margin-top: 2rem; /* Spacing above */
}

.main-content p {
    font-size: 1.2rem; /* Increase font size for readability */
    margin: 1rem 0; /* Spacing between paragraphs */
}

.img-fluid {
    max-width: 100%; /* Ensures the image is responsive */
    height: auto; /* Keeps the aspect ratio */
}

</style>
<header class="masthead" style="background-image: url('<?= BASE_URL.'public/' ?>assets/img/404.jpg');">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 text-center">
                <div class="page-heading">
                    <h1 class="display-1">404</h1>
                    <span class="subheading">Oops! Page Not Found</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 text-center">
                <h2>Sorry, we couldn't find the page you're looking for.</h2>
                <p>It seems that the page you were trying to access does not exist. It may have been removed, had its name changed, or is temporarily unavailable.</p>
                <p>You can return to the <a href="index.php">homepage</a> or use the navigation menu to find what you're looking for.</p>
                <p>404 Illustration </p>
            </div>
        </div>
    </div>
</main>
<?php require_once ('inc/footer.php'); ?>
