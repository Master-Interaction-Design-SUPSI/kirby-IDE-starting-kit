<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    // title and SEO image and description

        $title = "";
        $title = $page->title().' | '.$site->seo_title();

        $image = "";
        if ($page->og_image()->isNotEmpty()) {
            $image = $page->og_image()->toFile()->url();
        } else {
            if($site->og_image()->isNotEmpty()) {
                $image = $site->og_image()->toFile()->url();
            }
        }

        $description = "";
        if ($page->seo_description()->isNotEmpty()) {
            $description = $page->seo_description();
        } else {
            $description = $site->seo_description();
        }

    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Author">
    <meta name="description" content="<?= $description ?>">

    <!--- og:socials -->
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $page->url() ?>" />
    <meta property="og:image" content="<?= $image ?>" />
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:site_name" content="<?= $title ?>">

    <!-- Twitter social -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="<?= $image ?>">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $description ?>">

    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= $site->url() ?>/assets/css/main-v1.css">
</head>
