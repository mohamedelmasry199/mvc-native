<h1 class="mb-4">
    Welcome
    <?php
    if(\app\core\Application::isGuest()) {
        echo ('Guest');}
        else {
            echo \app\core\Application::$app->user->name;
        }

    ?> 👋
</h1>
<div class="p-5 bg-light rounded">
    <h2>Home Page</h2>
    <p>This is a clean Bootstrap design using Native PHP.</p>
</div>
