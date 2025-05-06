
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <h1>🚀Formulaire d'inscription</h1>
    </header>
<main>
    <figure>
        <figcaption>
            <h3>😎 The wolrd is your</h3>
        </figcaption>
        <img 
        src="https://www.pokepedia.fr/images/4/44/Sprite_Pectorius_2_SL.png?20161121055445" 
        alt="personnage" loading="lazy">
    </figure>
    <section>
        <h2>
            <span aria-hidden="true">📣</span>&nbsp;
            Vos informations
        </h2>
        <ul>
            <?php foreach ($_POST as $value) {
                    if (empty($value)) {
                        $hasEmpty = true;
                        break;
                    }
                }
                ?>
                <?php  include_once __DIR__   ?>

                <?php if ($hasEmpty): ?>
                    <p style="Warning">Erreur : au moins un champ est vide.</p>
                <?php else: ?>
                    <ul>
                        <?php foreach ($_POST as $key => $value): ?>
                            <li><?= $key." ".htmlspecialchars($value) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            
            <?php foreach($_POST as $key => $value) : ?>
                <?php if(!empty($value)) : ?>
             <li><?= $key. " ". $value ?></li>  
             <?php  else : ?>                
                <li> <?= $key ?> champs obligatoire!</li>
                <?php endif ?>

             <?php endforeach ?>

            <?php
            
            
           /*  foreach($_POST as $key => $value){
                if(empty($value)){
                    print "<li> $key :valeur obligatoire </li>";

                }else{
                    print "<li> $key : valeur obligatoire <li>";
             }
        }*/
            ?> 
                </ul>
    </section>
        <fieldset>
            <legend>inscription</legend>
            <!-- https://giusmili.github.io/cube-halloween/asset/halloween-cover.jpeg -->
            <!-- https://www.google.com/search? -->
            <form action="index.php" method="post"> <!-- post and get -->
                <label for="numero">Numéro de serie</label>
                <input type="text" 
                        id="numero" 
                        name="numero" 
                        placeholder="Numéro de serie" 
                        aria-required="true" 
                        autofocus>
                <label for="date">Votre anniversaire</label>
                <input type="date" id="date" name="date" aria-required="true">
                <label for="pays">Lieu de naissance</label>
                    <div class="select-pays" role="group" aria-labelledby="pays">
                        <select name="pays" id="pays" aria-required="true">
                            <option value="">Choisir son pays</option>
                            <option value="france">France</option>
                            <option value="germany">Germany</option>
                            <option value="italy">Italy</option>
                            <option value="spain">Spain</option>

                        </select>
                    </div>
                <input type="submit" value="Envoyer">
                
        </form>
</fieldset>
<pre>

</pre>
    
    
      
   
    </main>
    <footer>
      <strong>
        &copy; - MIT - 2024</strong>
    </footer>
     
</body>
</html>