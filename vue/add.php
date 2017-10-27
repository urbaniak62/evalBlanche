<?php
include('header.php');
 ?>
<form class=""  method="post">

 <div class="row">
     <form class="col s12">
       <div class="row">
         <div class="input-field col s6">
           <input name="marque" type="text" class="validate">
           <label for="first_name">marque</label>
         </div>
         <div class="input-field col s6">
           <input name="annee" type="text" class="validate">
           <label for="last_name">année</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s6">
           <input name="porte" type="text" class="validate">
           <label for="porte">nombre de porte</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <input name="description" class="validate">
           <label>description</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s6">
           <input name="prix" class="validate">
           <label>prix</label>
         </div>
       </div>
       <div class="row">
         <div class="col s6">
           <input type="submit" name="submit" value="submit">
         </div>
       </div>
     </form>
   </div>
</form>


 <?php
 include('footer.php');
  ?>
