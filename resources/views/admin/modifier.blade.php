@extends('admin.dashbord')
@section('modifier')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <form method="POST" action="{{ route('admin.modifier', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user" id="name"
                                        value="{{ $user->name }}"
                                       style="pointer-events: none; background: #f2f2f2; color: #888">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control form-control-user" id="email"
                                       aria-describedby="emailHelp"  value="{{ $user->email }}"
                                       style="pointer-events: none; background: #f2f2f2; color: #888">
                            </div>
                            <label for="role">Rôle :</label>
                            <select id="role" name="role">
                                <option value="client" @if($user->role == 'client') selected @endif>Client</option>
                                <option value="agent" @if($user->role == 'agent') selected @endif>Agent</option>
                                <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                            </select>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Modifier
                            </button>
                            <hr>
                        </form>

                    </div>
                </div>
            </div>


@endsection
