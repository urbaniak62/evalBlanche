<?php
require_once('header.php')

 ?>
 <form class="" method="post">

 </form>
<div class="row">
  <form class="col s12 ">
    <div class="row">
      <div class="input-field col s6">
        <input name="type" type="text" class="validate" value="">
        <label for="first_name">type</label>
      </div>
    </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="marque" type="text" class="validate">
          <label for="first_name">marque</label>
        </div>
      </div>
        <div class="row">
          <div class="input-field col s6">
            <input name="annee" type="text" class="validate">
            <label for="first_name">année</label>
          </div>
        </div>
          <div class="row">
            <div class="input-field col s6">
              <input name="porte" type="text" class="validate">
              <label for="first_name">porte : </label>
            </div>
          </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="description" type="text" class="validate">
                <label for="first_name">description : </label>
              </div>
            </div>
              <div class="row">
                <div class="input-field col s6">
                  <input name="cylindre" type="text" class="validate">
                  <label for="first_name">cylindre : </label>
                </div>
              </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input name="speed" type="text" class="validate">
                    <label for="first_name">vitesse max : </label>
                  </div>
                </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="tonne" type="text" class="validate">
                      <label for="first_name">tonne</label>
                    </div>
                  </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input name="prix" type="text" class="validate">
                        <label for="first_name">prix</label>
                      </div>
                    </div>
                    <button type="submit" name="submit">update</button>
            </form>
</div>

 <?php
 require_once('footer.php')
 ?>
