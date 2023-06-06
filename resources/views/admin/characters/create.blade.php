@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.characters.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                required maxlength="150" minlength="3" >
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="attack">attack</label>
            <input type="number" class="form-control @error('attack') is-invalid @enderror" name="attack" id="attack">
            @error('attack')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="defence">defence</label>
            <input type="number" class="form-control @error('defence') is-invalid @enderror" name="defence" id="defence">
            @error('defence')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="speed">speed</label>
            <input type="number" class="form-control @error('speed') is-invalid @enderror" name="speed" id="speed">
            @error('speed')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="life">life</label>
            <input type="number" class="form-control @error('life') is-invalid @enderror" name="life" id="life">
            @error('life')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">description</label>
            <textarea name="description" id="description" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
