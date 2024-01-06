@extends('main')
@section('title')
    Modification d'un service
@endsection
@section('content')
    <div class="row">
        <div class="col-md-5">
            <form method="post" action="{{ url('/services/update') }}">
                @csrf
                @if(session()->has('message'))
                    <div class="alert {{ session()->get('type') }}">{{ session()->get('message') }}</div>
                @endif
                <input type="hidden" name="id" value="{{ $service->id }}">
                <div class="form-group">
                    <label>
                        Entrez le nom du service
                    </label>
                    <input type="text" name="name"
                           class="form-control"
                           value="{{ $service->name }}"
                           placeholder="Nom du service" >
                    @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>
                        Selectionner le service
                    </label>
                    <select name="sous_direction_id" class="form-control">
                        <option value="">Selectionner le service</option>
                        @foreach($sousDirections as $sousDirection)
                            <option @if($service->sous_direction_id == $sousDirection->id) selected @endif value="{{ $sousDirection->id }}">
                                {{ $sousDirection->name }}
                            </option>
                        @endforeach
                    </select>
                    @if($errors->has('sous_direction_id'))
                        <span class="text-danger">{{ $errors->first('sous_direction_id') }}</span>
                    @endif
                </div>
                <div align="center">
                    <input type="submit" class="btn btn-primary" value="Modifier">
                </div>
            </form>
        </div>
    </div>
@endsection
