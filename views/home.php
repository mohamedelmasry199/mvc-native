<h1 class="mb-4">
    Welcome
    <?php
        echo (\app\core\Application::$app->user->firstname ?? 'Guest') . ' ' .
             (\app\core\Application::$app->user->lastname ?? '');
    ?> 👋
</h1>
<div class="p-5 bg-light rounded">
    <h2>Home Page</h2>
    <p>This is a clean Bootstrap design using Native PHP.</p>
</div>
