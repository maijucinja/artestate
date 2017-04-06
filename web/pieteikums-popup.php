<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-content">
    <span class="fa fa-remove close" data-dismiss="modal"></span>
    <h4 id="ipasums">Piesaki savu īpašumu</h4>
    <h4>Jūsu kontaktinformācija</h4>
    <hr>

    <div class="row">
      <div class="form-group col-sm-6">
          <label>Jūsu vārds, uzvārds</label>
          <input type="text" name="" class="form-control">
        </div>
        <div class="form-group col-sm-6">
          <label>E-pasts</label>
          <input type="text" name="" class="form-control">
        </div>
        <div class="col-sm-6 form-group">
          <label>Tālrunis</label>
          <input type="text" name="" class="form-control">
        </div>
    </div>

    <!-- pārtaisīt visu pēc augstāk esošā parauga. nevajag dalīt katru rindu atsevišķi, tam nav jēgas, programmētājam grūtāk arī saprast, jo mazāk tagu jo labāk. Šādi sanāk viss kā vajag tāpat -->

      <h4>Informācija par īpašumu</h4>
      <hr>
        <div class="row form-group">

          <div class="col-sm-6">
            <label>Pilsēta</label>
              <select class="form-control">
                <option>Rīga</option>
                <option>Ventspils</option>
              </select>
          </div>
          <div class="col-sm-6">
            <label>Iela</label>
            <input type="text" name="" class="form-control">
          </div>

      </div>
        <div class="form-group">
        <div class="row">
          <div class="col-sm-6">
            <label>Platība m<sup>2</sup></label>
            <input type="text" name="" class="form-control">
          </div>
          <div class="col-sm-6">
            <label>Istabu skaits</label>
            <input type="text" name="" class="form-control">
          </div>
        </div>
      </div>
           <div class="form-group">
        <div class="row">
          <div class="col-sm-6">
            <label>Veids</label>
              <select class="form-control">
                <option>..</option>
                <option>..</option>
              </select>
          </div>
          <div class="col-sm-6">
            <label>Tips</label>
              <select class="form-control">
                <option>Dzīvoklis</option>
                <option>..</option>
              </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-6">
            <label>Vēlamā cena EUR</label>
            <input type="text" name="" class="form-control">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Apraksts</label>
        <textarea class="form-control" rows="3"></textarea>
      </div>
      

      <div class="file-upload">
        <input type="file" name=""><!-- failu pievienošanai ir šāds tags, gribētos lai atrod pati, kā viņu var nostilot, tur triki visādi. un jānostilo tā lai strādā pēc tam ar :) šim gan laikam vienu div vajadzēs apkārt, uzliku jau, bet ne vairāk, pārējais, kas tev jau te ir - spans ar tekstu un fa siboliņš ar noderēs. pēc idejas princips ir tāds, ka inputs ir jāpadara neredzams un viss paŗējais viņam jāuzliek pa virsu, tā lai nospiežot pogu vienalga atvērtos failu ielādes logs. sameklēsi google-->
        <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Pievienot attēlus</span></a>
      </div>
      
        <div class="row">
          <div class="col-md-3 col-sm-6">
             <img src="img/katrtelpas1.jpg" class="img-responsive">
             <!-- uzliedz ludzu ari katrai bilditei virsu <a> ar miskasti, ķip nodzēst attēlu, uztaisi vnk kvadrātīnu ar brūnu fonu un baltu to fa miskasti, bij piemirsies -->
          </div>
          <div class="col-md-3 col-sm-6">
             <img src="img/katrtelpas1.jpg" class="img-responsive">
          </div>
        </div>
      <button type="submit" class="btn">Sūtīt</button>
  </div>

</div>