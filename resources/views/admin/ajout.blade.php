@extends('admin.dashbord')
@section('ajout')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <label style="font-size: 2rem; display: flex; justify-content: center; margin-top: 2rem" >ENREGISTRER UNE VOITURE :</label>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0" >

                        <form method="POST" action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" style="display: flex; flex-direction: row; margin-top: 2rem">
                                <label for="marque" class="col-sm-2 col-form-label">Marque :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="marque" class="form-control form-control-user" id="marque" aria-describedby="emailHelp" placeholder="Entrez votre marque">
                                </div>
                            </div>

                            <div class="form-group" style="display: flex; flex-direction: row">
                                <label for="modele" class="col-sm-2 col-form-label">Modèle :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="modele" class="form-control form-control-user" id="modele" aria-describedby="emailHelp" placeholder="Entrez votre modèle">
                                </div>
                            </div>

                            <div class="form-group"  style="display: flex; flex-direction: row">
                                <label for="annee" class="col-sm-2 col-form-label">Année :</label>
                                <div class="col-sm-8">
                                    <input type="date" name="annee" class="form-control form-control-user" id="annee" aria-describedby="emailHelp" placeholder="Entrez l'année">
                                </div>
                            </div>

                            <div class="form-group" style="display: flex; flex-direction: row">
                                <label for="cylindre" class="col-sm-2 col-form-label">Cylindre :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="cylindre" class="form-control form-control-user" id="cylindre" aria-describedby="emailHelp" placeholder="Entrez le cylindre">
                                </div>
                            </div>



                            <div class="form-group" style="display: flex; flex-direction: row">
                                <label for="carburant" class="col-sm-2 col-form-label">Carburant :</label>
                                <div class="col-sm-8">
                                <input type="text" name="carburant" class="form-control form-control-user" id="carburant"
                                    placeholder="Entrer le carburant">
                                </div>
                            </div>
                            <div class="form-group" style="display: flex; flex-direction: row">
                                <label for="kilometrage" class="col-sm-2 col-form-label">Kilometrage :</label>
                                <div class="col-sm-8">
                                <input type="number" name="kilometrage" class="form-control form-control-user"
                                    id="kilometrage" aria-describedby="emailHelp" placeholder="Enter le kilometrage">
                            </div>
                        </div>
                        <div class="form-group" style="display: flex; flex-direction: row">
                            <label for="transmission" class="col-sm-2 col-form-label">Transmission :</label>
                            <div class="col-sm-8">
                                <select name="transmission" class="form-control form-control-user" id="transmission">
                                    <option value="automatique">Automatique</option>
                                    <option value="manuel">Manuel</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group" style="display: flex; flex-direction: row">
                                <label for="marticule" class="col-sm-2 col-form-label">Marticule :</label>
                                <div class="col-sm-8">
                                <input type="text" name="marticule" class="form-control form-control-user" id="marticule"
                                    aria-describedby="emailHelp" placeholder="Enter le matricule">
                                </div>
                            </div>
                            <div class="form-group" style="display: flex; flex-direction: row">
                                <label for="Number" class="col-sm-2 col-form-label">Prix :</label>
                                <div class="col-sm-8">
                                <input type="number" name="prix" class="form-control form-control-user" id="prix"
                                    aria-describedby="emailHelp" placeholder="Enter le prix de la voiture">
                                    </div>
                            </div>
                            <div class="form-group" style="display: flex; flex-direction: row">
                                <label for="image" class="col-sm-2 col-form-label">Image :</label>
                                <div class="col-sm-8">
                                <input type="file" name="image" class="form-control form-control-user"
                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                    placeholder="Enter l'image de la voiture">
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Ajouter
                            </button>
                            <hr>


                </form>
            </div>
        </div>
    </div>
</div>


            @endsection
