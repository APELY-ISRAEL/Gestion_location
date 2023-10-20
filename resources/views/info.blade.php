<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <label
                style="font-size: 2rem; display: flex; justify-content: center; margin-top: 2rem; margin-bottom: 2rem">INFORMATION
                :</label>
            <div style="display: flex; justify-content: center; align-items: center">
                <!-- Deux colonnes : Image à gauche, Informations à droite -->
                <div style="display: flex; flex-direction: column; width: 70rem; height: 80rem">
                    <div style="height: 32%; display: flex; flex-direction: row; width: 100%">
                        <div style="width: 100rem;">
                            <!-- Image -->
                            <img style="width: 100%" height="100%; object-fit: cover"
                                src="{{ Storage::url($car->image) }}" alt="Image de la voiture">
                        </div>

                        <div style="width: 100rem;">
                            <form method="POST" action="#" enctype="multipart/form-data">
                                @csrf
                                <!-- Les informations de la voiture à droite -->

                                <div class="form-group"
                                    style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                    <label for="modele">Modèle :</label>
                                    <input style="width: 20rem; margin-left: 2rem; pointer-events: none" type="text"
                                        name="modele" class="form-control form-control-user" id="modele"
                                        value="{{ $car->modele }}">
                                </div>
                                <div class="form-group"
                                    style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                    <label for="marque">Marque :</label>
                                    <input style="width: 20rem; margin-left: 2rem;pointer-events: none;" type="text"
                                        name="marque" class="form-control form-control-user" id="marque"
                                        value="{{ $car->marque }}">
                                </div>
                                <div class="form-group"
                                    style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                    <label for="transmission">Transmission :</label>
                                    <input style="width: 20rem; margin-left: 1rem;pointer-events: none;" type="text"
                                        name="transmission" class="form-control form-control-user" id="transmission"
                                        value="{{ $car->transmission }}">
                                </div>
                                <div class="form-group"
                                    style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                    <label for="cylindre">Cylindre :</label>
                                    <input style="width: 20rem; margin-left: 2rem;pointer-events: none;" type="text"
                                        name="cylindre" class="form-control form-control-user" id="cylindre"
                                        value="{{ $car->cylindre }}">
                                </div>
                                <div class="form-group"
                                    style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                    <label for="matricule">Matricule :</label>
                                    <input style="width: 20rem; margin-left: 2rem;pointer-events: none;" type="text"
                                        name="marticule" class="form-control form-control-user" id="matricule"
                                        value="{{ $car->marticule }}">
                                </div>
                                <div class="form-group"
                                    style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                    <label for="annee">Année :</label>
                                    <input style="width: 20rem; margin-left: 2rem;pointer-events: none;" type="text"
                                        name="annee" class="form-control form-control-user" id="annee"
                                        value="{{ $car->annee }}">
                                </div>
                                <div class="form-group"
                                    style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                    <label for="kilometrage">Kilométrage :</label>
                                    <input style="width: 20rem; margin-left: 1.5rem;pointer-events: none;"
                                        type="text" name="kilometrage" class="form-control form-control-user"
                                        id="kilometrage" value="{{ $car->kilometrage }}">
                                </div>
                                <div class="form-group"
                                    style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                    <label for="prix">Prix :</label>
                                    <input style="width: 20rem; margin-left: 2rem;pointer-events: none;" type="text"
                                        name="prix" class="form-control form-control-user" id="kilometrage"
                                        value="{{ $car->prix }}">
                                </div>
                                <!-- Ajoutez les autres informations de la voiture ici -->
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div>
                         

                        <div class="row justify-content-center" id="form" style="display: none">


                            <div class="col-xl-10 col-lg-12 col-md-9">

                                <label
                                    style="font-size: 2rem; display: flex; justify-content: center; margin-top: 2rem">RESERVER
                                    UNE VOITURE :</label>
                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">

                                        <form method="POST" action="#" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Les informations de la voiture à droite -->

                                            <div class="form-group"
                                                style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                                <label for="Nom">Nom :</label>
                                                <input style="width: 20rem; margin-left: 2rem; pointer-events: none"
                                                    type="text" name="nom"
                                                    class="form-control form-control-user" id="nom">
                                            </div>
                                            <div class="form-group"
                                                style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                                <label for="Prenom">Prenom :</label>
                                                <input style="width: 20rem; margin-left: 2rem;pointer-events: none;"
                                                    type="text" name="prenom"
                                                    class="form-control form-control-user" id="prenom">
                                            </div>
                                            <div class="form-group"
                                                style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                                <label for="Adresse">Adresse :</label>
                                                <input style="width: 20rem; margin-left: 1rem;pointer-events: none;"
                                                    type="text" name="adresse"
                                                    class="form-control form-control-user" id="adresse">
                                            </div>
                                            <div class="form-group"
                                                style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                                <label for="Numero">Numero :</label>
                                                <input style="width: 20rem; margin-left: 2rem;pointer-events: none;"
                                                    type="text" name="numero"
                                                    class="form-control form-control-user" id="numero">
                                            </div>
                                            <div class="form-group"
                                                style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                                <label for="profession">Profession:</label>
                                                <input style="width: 20rem; margin-left: 2rem;pointer-events: none;"
                                                    type="text" name="annee"
                                                    class="form-control form-control-user" id="annee">
                                            </div>
                                            <div class="form-group"
                                                style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                                <label for="Date debut">Date debut :</label>
                                                <input style="width: 20rem; margin-left: 2rem;pointer-events: none;"
                                                    type="text" name="date-debut"
                                                    class="form-control form-control-user" id="date_debut"
                                                    value="{{ $car->date_debut }}">
                                            </div>
                                            <div class="form-group"
                                                style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                                <label for="Date fin">Date fin:</label>
                                                <input style="width: 20rem; margin-left: 2rem;pointer-events: none;"
                                                    type="text" name="date_fin"
                                                    class="form-control form-control-user" id="annee"
                                                    value="{{ $car->date_fin }}">
                                            </div>

                                            <div class="form-group"
                                                style="display: flex; flex-direction: row;justify-content: center; align-items: center ">
                                                <label for="prix">Prix :</label>
                                                <input style="width: 20rem; margin-left: 2rem;pointer-events: none;"
                                                    type="text" name="prix"
                                                    class="form-control form-control-user" id="prix"
                                                    value="{{ $car->prix }}">
                                            </div>
                                            <!-- Ajoutez les autres informations de la voiture ici -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function afficher() {
        const form = document.getElementById('form');
        console.log(form);
        form.style.display = "block";
    }
</script>
<link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
