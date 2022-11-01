<?php

declare(strict_types=1);

namespace App;

require_once('src/Utils/debug.php');

$action = null;

if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List APP</title>
</head>
<body>
    <header>LIST APP</header>
    <div>
        <nav>
            <ul>
                <li><a href="/">Lista notatek</a></li>
                <li><a href="/?action=create">Link 2</a></li>
                <li><a href="/?action=view">Link 3</a></li>
            </ul>
        </nav>
        <main>
            <section class="main-content">
                <?php if($action === 'create'): ?>
                    <button>Create new note!</button>
                <?php else: ?>
                    <p>List of you notes:</p>
                    <ul>
                        <li>first task</li>
                        <li>first task</li>
                        <li>first task</li>
                        <li>first task</li>
                    </ul>
                <?php endif;?>
            </section>
        </main>
    </div>
    <footer>Footer section</footer>
</body>
</html>