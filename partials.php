<?php

function nav_item(string $href, string $label): string {
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?? "/";
    $current = basename($path) ?: "index.php";
    $isActive = ($current === $href) ? "active" : "";
    return "<a class=\"pill $isActive\" href=\"$href\">$label</a>";
}

/* header */
function render_header(string $pageTitle): void { ?> 

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Tamme portfolio - <?= htmlspecialchars($pageTitle) ?> </title>
    <link rel="stylesheet" href="styles.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700;800&family=Harmattan:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
    <div class=" header-inner">
        <nav class="nav">
            <?= nav_item("index.php", "Home") ?>
            <?= nav_item("projects.php", "Projects") ?> 
            <?= nav_item("aboutme.php", "About") ?> 
            <?= nav_item("contact.php", "Contact") ?> 
        </nav>
    </div>
</header>

<main class="wrap">

<?php }

/* footer */
function render_footer(): void { ?>

</main>

<footer class="footer">
    <div class="wrap footer-inner">
        <span>© <?= date("Y") ?> </span>
    </div>
</footer>

</body>
</html>

<?php }