@extends('welcome')

@section('content')
<div class="row">
<div class="col-lg-6 mx-auto">

    <form method="POST" action="{{ route('home.update',$perso) }}">
     @csrf
     @method('PATCH') 

        <div class="form-group">
            <label for="perso-title">Pseudo</label>
            <input type="text" name="pseudo" 
                   value="{{$perso->pseudo}}" class="form-control" id="perso-pseudo">
        </div>
        

        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>
</div>
@endsection