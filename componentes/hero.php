 <?php

    $itens = [
        ['href' => '', 'src' => '/img/twitter.png', 'alt' => 'Twitter logo'],

        ['href' => '', 'src' => '/img/facebook.png', 'alt' => 'Facebook logo'],

        ['href' => '', 'src' => '/img/linkedin.png', 'alt' => 'Linkedin logo'],

        ['href' => '', 'src' => '/img/youtube.png', 'alt' => 'Linkedin logo'],

    ];

    ?>

 <section class="flex gap-x-3">
     <div class="w-2/3">
         <h1 class="text-3xl font-bold">Oi, meu nome é Davi!</h1>
         <p class="text-xl" leading-6 mt-6>
             Sou estudante de programação e estou me especializando em PHP com a RocketSeat.
         </p>
         <ul class="flex gap-x-3 mt-3">

             <?php foreach ($itens as $item): ?>

                 <li><a href="<?= $item['href'] ?>" target="_blank">
                 <li><a href=""></a><img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"></li>


             <?php endforeach; ?>





         </ul>

     </div>


     <div class="w-1/3 flex items-center justify-center">
         <div>
             <img class="h-60 -mt-4 hover:animate-pulse" src="/img/avatar.svg" alt=" Foto Davi Dias">
         </div>

     </div>
 </section>