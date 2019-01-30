<!DOCTYPE html>
<html lang="ca">
  <head>
    <title>Banc de sang</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/menu.js"></script>
  </head>
  <body class="donar">
    <header>
        <div id="logo">
            <a class="link" href="../">
                <img id="logo" src="../images/banc-de-sang-2.png" alt="Logo"</img>
            </a>
        </div>
        <nav>
            <div class="ubicacio">
                <a href="../ubicacio">
                    <i class="fa fa-map-marker"></i><br>
                </a>
            </div>

            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="../">Inicio</a>
                <a href="../conocenos">Sobre nosotros</a>
                <a href="../donar">Donar</a>
                <a href="../requisitos">Requisitos</a>
                <a href="../aprende">Aprende</a>
                <a href="#">Contacto</a>
              </div>
            </div>

            <div class="menu">
                <a href="#">
                    <i onclick="openNav()" class="fa fa-bars"></i><br>
                </a>
            </div>
        </nav>
    </header>

    <section class="imatge">
        <article class="banner-conocenos">
      </article>
      <article class="conocenos-imatge">
        <div class="sobrenosotros">
            <h3>CONTACTO</h3>
        </div>
        <br>
        <div class="imatge-bancsang">
          <img id="banc-de-sang" src="../images/conocenos.jpg" alt="imatge"</img>
        </div>
        <br>
        <div class="divinfo">
        <div class="contacte">
          <h3>Datos de contacto:</h3>
          <h5>Nom: La Salle Gracia</h5>
          <h5>Teléfon: 932 92 21 18</h5>
          <h5>Provincia: Provincia de Barcelona</h5>
          <h5>Dirección: 14, Plaça del Nord, 08024 Barcelona</h5>
        </div>
        <div class="div-formulari">
            <h3>Ponte en contacto:</h3>
          <form class="formulari" method="post" action="index.php">
           <p>
             <label>Nombre</label>
             <input name="nom" class="w3-input" type="text"></p>
           <p>
             <label>Email</label>
             <input name="email" class="w3-input" type="email"></p>
           <p>
             <label>Mensaje</label>
             <input type="text" class="w3-input" name="missatge">
         </p><br>
           <input id="submit" class="formulario-enviar" name="submit" type="submit" value="ENVIAR"><br>
           </form>

        <?php
        if(!empty($_POST)) {
           $nom = $_POST['nom'];
           $email = $_POST['email'];
           $missatge = $_POST['missatge'];
           $from = 'De: Banco de sangre La Salle Gracia';
           $to = 'droyovirgili@gmail.com';
           $subject = 'Contacto Banco de sangre';

           $body = "Mensaje del banco de sangre la salle gracia.\n\nNombre:".$nom."\nCorreo: ".$email."\nMensaje: ".$missatge;


           if ($_POST['submit']) {
               if (mail ($to, $subject, $body, $from)) {
                   print"<p>El mensaje se ha enviado correctamente!</p>";

                   $from = 'De: Banco de sangre La Salle Gracia';
                   $subject = 'Hemos recibido tu mensaje';

                   $body = "Tu mensaje ha sido recibido correctamente\nPor favor, no contestar a este correo.";
                   mail ($email, $subject, $body, $from);
               } else {
                   print"<p>Alguna cosa ha fallado al enviar el correo, intente otra vez.</p>";
               }
           }
       }
        ?>
        </div>

        </div>


      </article>
    </section>
    <footer>
      <div>
        <h3>POLITICA DE PRIVACIDAD</h3>
      </div>
      <div>
        <h3>TERMINOS Y CONDICIONES</h3>
      </div>
      <div class="contacto">
        <a href="#"><h3>CONTACTO</h3></a>
      </div>
      <div class="nosotros">
        <a href="../conocenos/"><h3>SOBRE NOSOTROS</h3></a>
      </div>
    </footer>
  </body>
</html>
