@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link DodajRad">Evidentiraj rad</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link poduzeca">Poduzeće</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link zaposlenici">Zaposlenici</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link odradeniRad">Odrađeni rad</a>
                    </li>
                  </ul>
                </div>
    <div class="card-body">
    <div id="Poduzeca">
                        <h3>Podaci o poduzeću:</h3>
                        <a href='/home/dodajPoduzece'   class='btn  btn-success btn-lg float-left button-dodaj' title="Dodaj poduzeće"  >+ Novo poduzeće</a>
                        <a style="font-size:16px" href='/download' class='btn  btn-secondary btn-lg float-right' title="Preuzmi excel tablicu"><i class="fa-solid fa-file-excel"></i></a>
                        <table class="table_id">
                        <thead>
                        <tr >
                        <th>Naziv poduzeća</th>
                        <th>Datum osnutka</th>
                        <th>Vlasnik/ca</th>
                        <th>OIB</th>
                        <th>Kontakt</th>
                        <th>Email</th>
                        <th>Opcije</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($brojPoduzeca>0)
                        @foreach ($poduzeca as $poduzece)
                        <tr> 
                            <td>{{$poduzece->nazivPoduzeca}}</td>
                            <td>{{$poduzece->datumOsnutka}}</td>
                            <td>{{$poduzece->vlasnik}}</td>
                            <td>{{$poduzece->OIB}}</td>
                            <td>{{$poduzece->kontakt}}</td>
                            <td>{{$poduzece->email}}</td>
                            <td class="gumbi">
                              <a href="/home/pregledajPoduzece/{{$poduzece->id}}" title="Vidi sve podatke"><i class="fa-solid fa-eye"></i></a>
                              <a href="/home/urediPoduzece/{{$poduzece->id}}" title="Uredi"><i class='fas fa-pencil-alt'> </i></a>
                              <button class='fas poduzece-delete' data-toggle="modal" data-target="#myModal" data-narudzba_id="{{$poduzece->id}}" title="Obriši!"><i class='fas '>&#xf2ed;</i></button>
                            </td>
                        </tr>
                        @endforeach
                       @endif
                      </tbody>
                        </table>
                      </div>
    <div id="Zaposlenici">
                        <h3>Popis zapolsenika:</h3>
                        <a href='/home/dodajZaposlenika'   class='btn  btn-success btn-lg float-left button-dodaj'  title="Dodaj novog zaposlenika" >+ Novi zaposlenik</a>
                        <a style="font-size:16px" href='/downloadZaposlenici' class='btn  btn-secondary btn-lg float-right' title="Preuzmi excel tablicu"><i class="fa-solid fa-file-excel"></i></a>
                        <table class="table_id">
                        <thead>
                        <tr >
                        <th>Ime i prezime</th>
                        <th>OIB</th>
                        <th>Kontakt</th>
                        <th>Email</th>
                        <th>Adresa</th>
                        <th>Radno mjesto</th>
                        <th>Opcije</th>
                        </tr>
                         </thead>
                         <tbody>
                          @if($brojZaposlenika>0)
                          @foreach ($zaposlenici as $zaposlenik)
                         <tr> 
                            <td>{{$zaposlenik->ime}} {{$zaposlenik->prezime}}</td>
                            <td>{{$zaposlenik->OIB}}</td>
                            <td>{{$zaposlenik->kontakt}}</td>
                            <td>{{$zaposlenik->email}}</td>
                            <td>{{$zaposlenik->ulica}} {{$zaposlenik->kucniBroj}} {{$zaposlenik->mjestoStanovanja}}</td>
                            <td>{{$zaposlenik->radnoMjesto}}</td>
                            <td class="gumbi">
                              <a href="/home/pregledajZaposlenika/{{$zaposlenik->id}}" title="Vidi sve podatke"><i class="fa-solid fa-eye"></i></a>
                              <a href="/home/urediZaposlenika/{{$zaposlenik->id}}" title="Uredi"><i class='fas fa-pencil-alt'> </i></a>
                              <button class='fas zaposlenik-delete' data-toggle="modal" data-target="#myModal" data-zaposlenik_id="{{$zaposlenik->id}}" title="Obriši!"><i class='fas '>&#xf2ed;</i></button>
                            </td>
                            </tr>
                            @endforeach
                            @endif
                         </tbody>
                         </table>
                         </div>
                        <div id="OdradeniRad">
                        <h3>Evidencija odrađenog rada:</h3>
                        <a href='/home/dodajRad'   class='btn  btn-success btn-lg float-left button-dodaj'  title="Dodaj novog zaposlenika" >+ Unesi odrađeni rad</a>
                        <a style="font-size:16px" href='/downloadRad' class='btn  btn-secondary btn-lg float-right button-excel'><i class="fa-solid fa-file-excel"></i></a>
                        <table class="table_id">
                        <thead>
                        <tr >
                        <th>Datum</th>
                        <th>Zaposlenik</th>
                        <th>Početak rada</th>
                        <th>Kraj rada</th>
                        <th>Redoviti rad</th>
                        <th>Prekovremeni rad</th>
                        <th>Status</th>
                        <th>Opcije</th>
                        </tr>
                         </thead>
                         <tbody>
                          @if($brojOdradenihRadova > 0)
                          @foreach($odradeniRadovi as $odradeniRad)
                         <tr> 
                            <td>{{$odradeniRad->datumRada}}</td>
                            <td>Robert Ello</td>
                            <td> {{$odradeniRad->pocetakRada}}</td>
                            <td>{{$odradeniRad->krajRada}}</td>
                            <td>{{$odradeniRad->redovitiRad}}</td>
                            <td>{{$odradeniRad->prekovremeniRad}}</td>
                            <td>{{$odradeniRad->Status}}</td>
                              <td class="gumbi">
                              <a href="/home/pregledajRad/{{$odradeniRad->id}}" title="Vidi sve podatke"><i class="fa-solid fa-eye"></i></a>
                              <a href="/home/urediRad/{{$odradeniRad->id}}" title="Uredi"><i class='fas fa-pencil-alt'> </i></a>
                              <button class='fas rad-delete' data-toggle="modal" data-target="#myModal" data-rad_id="{{$odradeniRad->id}}" title="Obriši!"><i class='fas '>&#xf2ed;</i></button>
                            </td>
                          </tr>
                         @endforeach
                         @endif
                         </tbody>
                         </table>
                         </div>    
    <div id="DodajRad">
        <a href="/home/zavrsiRad" class="btn btn-danger btn-block btn-lg" > Završi rad</a>
        <br>
        <a href="/home/zapocniRad" class="btn btn-success btn-block btn-lg">Započni rad</a>
       </div>   
                </div>
              </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Oprez</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Jeste li sigurni da želite obrisati?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Ne</button>
        <td><a href="" class="btn btn-success delete-route">Da</a></td>
      </div>
    </div>
  </div>
</div>


<script>
    $(document).ready(function(){
        //Dodavanje plug ina za tablicu s podacima
        $('.table_id').DataTable();

          //Brisanje poduzeca
    $('.table_id').on('click', '.poduzece-delete', function(){
        let narudzba_id = $(this).data('narudzba_id');
        console.log('Klik:' + this);
        $('#myModal .delete-route').attr('href', '/home/obrisiPoduzece/'+narudzba_id);
        $('#myModal').modal('show');
       });
       $('.table_id.dataTable').bind('page', function () {
          // Call same code as for ready here
          $('.narudzba-delete').on('click', function(){
          let narudzba_id = $(this).data('narudzba_id');
          });
     
      });

      //Brisanje zaposlenika
      $('.table_id').on('click', '.zaposlenik-delete', function(){
        let narudzba_id = $(this).data('zaposlenik_id');
        console.log('Klik:' + this);
        $('#myModal .delete-route').attr('href', '/home/obrisiZaposlenika/'+narudzba_id);
        $('#myModal').modal('show');
       });
       $('.table_id.dataTable').bind('page', function () {
          // Call same code as for ready here
          $('.narudzba-delete').on('click', function(){
          let narudzba_id = $(this).data('narudzba_id');
          });
     
      });

      //Brisanje rada
      $('.table_id').on('click', '.rad-delete', function(){
        let narudzba_id = $(this).data('rad_id');
        console.log('Klik:' + this);
        $('#myModal .delete-route').attr('href', '/home/obrisiRad/'+narudzba_id);
        $('#myModal').modal('show');
       });
       $('.table_id.dataTable').bind('page', function () {
          // Call same code as for ready here
          $('.narudzba-delete').on('click', function(){
          let narudzba_id = $(this).data('narudzba_id');
          });
     
      });

       //Na klik prikazi odredenu tablicu
         //Na ucitavanje stranice
           $(".DodajRad").addClass( "active");
           $("#DodajRad").show();
           $("#Zaposlenici").hide();
           $("#OdradeniRad").hide();
           $("#Poduzeca").hide();

           //Na klik opcije poduzeca prikazi tablicu Dodaj rad ostale sakrij
           $(".DodajRad").click(function(){
             $(".DodajRad").addClass( "active");
             $("#DodajRad").show();
             $('.zaposlenici').removeClass("active")
             $('.odradeniRad').removeClass("active")
             $(".poduzeca").removeClass( "active");
             $("#Zaposlenici").hide();
             $("#OdradeniRad").hide();
             $("#Poduzeca").hide();
            });


         //Na klik opcije poduzeca prikazi tablicu poduzeca ostale sakrij
           $(".poduzeca").click(function(){
             $(".poduzeca").addClass( "active");
             $("#Poduzeca").show();
             $('.zaposlenici').removeClass("active")
             $('.odradeniRad').removeClass("active")
             $(".DodajRad").removeClass( "active");
             $("#Zaposlenici").hide();
             $("#OdradeniRad").hide();
             $("#DodajRad").hide();
            });

         //Na klik opcije zaposlenici prikazi tablicu zaposlenika ostale sakrij
            $(".zaposlenici").click(function(){
             $(".zaposlenici").addClass( "active");
             $("#Zaposlenici").show();
             $('.poduzeca').removeClass("active")
             $('.odradeniRad').removeClass("active")
             $(".DodajRad").removeClass( "active");
             $("#Poduzeca").hide();
             $("#OdradeniRad").hide();
             $("#DodajRad").hide();
            });  
            
        //Na klik opcije zaposlenici prikazi tablicu zaposlenika ostale sakrij
          $(".odradeniRad").click(function(){
             $(".odradeniRad").addClass( "active");
             $("#OdradeniRad").show();
             $('.poduzeca').removeClass("active")
             $('.zaposlenici').removeClass("active")
             $(".DodajRad").removeClass( "active");
             $("#Poduzeca").hide();
             $("#Zaposlenici").hide();
             $("#DodajRad").hide();
            });  
             

      });
</script>
@endsection

