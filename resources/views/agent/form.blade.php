@extends('agent.dashbord')
@section('form')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <form method="POST" action="{{ route('agent.update',$car->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="texte" name="marque" class="form-control form-control-user" id="marque"
                                       aria-describedby="emailHelp" placeholder="Enter votre marque" value="{{$car->marque}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="modele" class="form-control form-control-user" id="modele"
                                       aria-describedby="emailHelp" placeholder="Enter votre modele" value="{{$car->modele}}">
                            </div>
                            <div class="form-group">
                                <input type="date" name="annee" class="form-control form-control-user"
                                       id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter votre annee" value="{{$car->annee}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cylindre" class="form-control form-control-user" id="cylindre"
                                       aria-describedby="emailHelp" placeholder="Enter le cylindre" value="{{$car->cylindre}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="carburant" class="form-control form-control-user" id="carburant"
                                       placeholder="Entrer le carburant" value="{{$car->carburant}}">
                            </div>
                            <div class="form-group">
                                <input type="number" name="kilometrage" class="form-control form-control-user"
                                       id="kilometrage" aria-describedby="emailHelp" placeholder="Enter le kilometrage" value="{{$car->kilometrage}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="transmission" class="form-control form-control-user"
                                       id="transmission" aria-describedby="emailHelp" placeholder="Enter la transmission" value="{{$car->transmission}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="marticule" class="form-control form-control-user" id="marticule"
                                       aria-describedby="emailHelp" placeholder="Enter le matricule" value="{{$car->marticule}}">
                            </div>
                            <div class="form-group">
                                <input type="number" name="prix" class="form-control form-control-user" id="prix"
                                       aria-describedby="emailHelp" placeholder="Enter le prix de la voiture" value="{{$car->prix}}">
                            </div>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control form-control-user"
                                       id="exampleInputEmail" aria-describedby="emailHelp"
                                       placeholder="Enter l'image de la voiture" value="{{$car->image}}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Modifier
                            </button>
                            <hr>

                </form>
            </div>
        </div>
    </div>


@endsection
