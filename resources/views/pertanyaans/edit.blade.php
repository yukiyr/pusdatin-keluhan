@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Jawaban</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('pertanyaans.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('pertanyaans.update',$pertanyaan->id) }}" method="POST">
        @csrf
        @method('PUT')
 
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pertanyaan:</strong>
                    <input type="text" name="pertanyaan" value="{{ $pertanyaan->pertanyaan }}" class="form-control" placeholder="Pertanyaan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jawaban:</strong>
                    <textarea class="form-control" style="height:150px" name="jawaban" placeholder="Jawaban">{{ $pertanyaan->jawaban }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong><br>
                    <label><input id="number" type="checkbox" name="status" value="0" <?php if($pertanyaan->status == 0) echo 'checked'; ?>> Belum Terjawab</label>
                    <label><input id="number" type="checkbox" name="status" value="1" <?php if($pertanyaan->status == 1) echo 'checked'; ?>> Terjawab</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>
@endsection