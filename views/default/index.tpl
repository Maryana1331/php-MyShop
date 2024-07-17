<!doctype html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="{$templateWebPath}css/main.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <title>{$pageTitle}</title>
        window.addEventListener('scroll', function() {
        document.getElementById('showScroll').innerHTML = pageYOffset + 'px';
        });

    </head>
    <body>
        {include file="../includes/header.tpl"}
           <div class="wrapper">
                {include file="../includes/sidebar.tpl"}
               <div id="content">
                    {foreach $lastProducts as $prod}
                        <div class="card" style="width: 11rem;">
                            <img src="../img/prodacts/{$prod['image']}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{$prod['name']}</h5>
                                <p class="card-text">{$prod['description']}</p>
                                <a href="/?controller=product&id={$prod['id']}/" class="card-link">Подробнее</a>
                            </div>
                        </div>

                    {/foreach}
                   {foreach $lastProducts as $prod}
                       <div class="card" style="width: 11rem;">
                           <img src="../img/prodacts/{$prod['image']}" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title">{$prod['name']}</h5>
                               <p class="card-text">{$prod['description']}</p>
                               <a href="/?controller=product&id={$prod['id']}/" class="card-link">Подробнее</a>
                           </div>
                       </div>

                   {/foreach}
                   {foreach $lastProducts as $prod}
                       <div class="card" style="width: 11rem;">
                           <img src="../img/prodacts/{$prod['image']}" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title">{$prod['name']}</h5>
                               <p class="card-text">{$prod['description']}</p>
                               <a href="/?controller=product&id={$prod['id']}/" class="card-link">Подробнее</a>
                           </div>
                       </div>

                   {/foreach}
                   {foreach $lastProducts as $prod}
                       <div class="card" style="width: 11rem;">
                           <img src="../img/prodacts/{$prod['image']}" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title">{$prod['name']}</h5>
                               <p class="card-text">{$prod['description']}</p>
                               <a href="/?controller=product&id={$prod['id']}/" class="card-link">Подробнее</a>
                           </div>
                       </div>

                   {/foreach}
               </div>
           </div>
        {include file="../includes/footer.tpl"}
    </body>
    <script src="{$templateWebPath}js/assets/dist/js/bootstrap.bundle.main.js"></script>
</html>