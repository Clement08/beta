<?php session_start();  ?>

<?php
include('header.php');
?>

<section id="page_contact">

   <div class="container">
       <div class="row">
           <form class="cd-form floating-labels">
               <div class="text-center">
                   <h3>Contactez-moi !</h3>
                   <p>Pour un projet, un conseil</p>
               </div>
               <?php if (array_key_exists('errors', $_SESSION)):?>
                   <?= implode('<br>', $_SESSION['errors']);?>
               <?php endif ?>

               <?php if (array_key_exists('success', $_SESSION)):?> Merci de votre message ! :)
               <?php endif ?>
               <form action="post_contact.php" method="POST"">
                   <div class="icon">
                       <label class="cd-label" for="cd-name">Votre Nom</label>
                       <input class="user" type="text" id="cd-name" required name="name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION ['inputs']['name'] :''; ?>">
                   </div>

                   <div class="icon">
                       <label class="cd-label" for="cd-email">Votre Email</label>
                       <input class="email" id="cd-email" required type="email" name="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION ['inputs']['email'] :''; ?>">
                   </div>

               <div class="icon">
                   <label class="cd-label" for="cd-subject">Sujet du mail</label>
                   <input class="subject" id="cd-subject" required type="text" name="subject" value="<?= isset($_SESSION['inputs']['subject']) ? $_SESSION ['inputs']['subject'] :''; ?>">
               </div>
               <div class="icon">
                   <label class="cd-label" for="cd-textarea">Votre message</label>
                   <textarea class="message" name="message" id="cd-textarea" required></textarea>
               </div>

               <div>
                   <button type="submit" value="submit">Envoyer</button>
               </div>
           </form>
       </div>
   </div>
</section>

<?php
include('footer.php');
?>
