<?php
require "api.php";
require "../vendor/autoload.php";
require "perso_mystere.php";

if(session_status() === PHP_SESSION_NONE) session_start();
$tab = $_SESSION['api'];
$alea = random_int(0, 57);

$description = ["est un sacré numéro, avec sa chance de cocu, tes chances de trouver un oeuf sont augmentées de 2",
                "possède différentes qualités mais on n’a toujours pas trouvé lesquelles",
                "est maladroit, si tu arrives à toucher le bon lapin c’est déjà une réussite",
                "est comme le papa de Jasmine il est complètement teubé",
                "sait tout faire sauf ce qu’on lui demande",
                "a toutes ses chances de miser sur le bon lapinou",
];

$id = random_int(0, 5);
?>


<div class="col-xs-12 col-sm-6 col-md-4">
    <div class="image-flip" ontouchstart="this.classList.toggle("hover");">
        <div class="mainflip">
            <div class="frontside">
                <div class="card">
                    <div class="card-body text-center">
                        <p><img class=" img-fluid" src="<?=$tab[$alea]['image']?>" alt="<?=$tab[$alea]['name']?>"></p>
                        <h4 class="card-title"><?=$tab[$alea]['name']?></h4>
                        <p class="card-text">Presentation de <?=$tab[$alea]['name']?></p>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <a href="jeu.php">
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title"><?=$tab[$alea]['name']?></h4>
                        <p class="card-text"><?=$tab[$alea]['name']?> <?=$description[$id]?></p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </a>
        </div>
</div>
</div>