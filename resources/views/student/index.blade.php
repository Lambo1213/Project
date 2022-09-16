@extends('layouts.app')


<!-- Modal -->
<div class="modal fade" id="ajoutEtudiantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter etudiant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3">
          <label for="">Nom etudiant</label>
          <input type="text" name="nom" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label for="">Email</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label for="">Telephone</label>
          <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label for="">Cour</label>
          <input type="text" name="corse" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-success ajout_etudiant">Enregistrer</button>
      </div>
    </div>
  </div>
</div>

@section('content')
             <center><h1>Page etudiant</h1></center>
  <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h1>Etudiant donnees
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#ajoutEtudiantModal">
                      Ajourt etudiant
                    </button>
                  </h1>
                  
                </div>
              </div>
        </div>
    </div>
  </div>

@endsection

@section('scripts')

<script>
    $(document).ready(function () {
        $(document).on(click, '.ajout_etudiant' , function (e) {
          e.preventDefault();
          var data = {
            'nom':$('.nom').val(),  
            'email':$('.email').val(),
            'phone':$('.phone').val(),
            'corse':$('.corse').val(),
          }
          //  console.log('data');
          $.ajax({
            type: "POST",
            url: "/students",
            data: "data",
            dataType: "json",
            success: function (response) {
              console.log(response);
            }
          });
        });
    });
</script>

@endsection
