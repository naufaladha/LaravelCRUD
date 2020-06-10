@extends('master')
@section('judul', 'CRUD Laravel | Edit')
@section('konten')
    <h3>Edit Data Mahasiswa</h3>    
        <form action="/edit/id={{$mahasiswa->id}}" method="post" class="p-5">    
        @csrf    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nama" value="{{$mahasiswa->nama}}" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nim" value="{{$mahasiswa->nim}}" autocomplete="off">
                </div>
            </div>            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>   
                <div class="col-sm-10">         
                    <div class="form-check form-check-inline">       
                        @if($mahasiswa->jk == 'Laki-laki')                 
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1" checked>
                        @else
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1">
                        @endif
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        @if($mahasiswa->jk == 'Perempuan')                 
                        <input class="form-check-input"  type="radio" name="jk" id="inlineRadio2" value="2" checked>
                        @else
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="2">
                        @endif
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>                           
            <div class="form-group row dropdown mb-0">                          
                <label class="col-sm-2 col-form-label">dosen</label>                         
                <div class="col-sm-10">                
                    @if($mahasiswa->dosen->id)
                    <a role="button" id="namadosen" class="custom-select col-md-6 text-dark" onclick="drop('selectdosen')">{{ $mahasiswa->dosen->nama }}</a>                                                               
                    @endif                
                </div>
            </div>
            <div class="form-group row">                
                <div id="selectdosen" class="dropdown-content col-md-5">                        
                    <select class="custom-select plaintext col" name="select" size="5">                            
                        <option class="dosen">--Pilih dosen--</option>
                        @foreach($dosen as $list)
                            @if($list->id == $mahasiswa->dosen_id)
                                <option selected class="dosen" value="{{ $list->nama }}">{{ $list->nama }}</option> 
                            @else
                            <option class="dosen" value="{{ $list->nama }}">{{ $list->nama }}</option> 
                            @endif
                        @endforeach 
                    </select>
                </div> 
            </div>    
            <div class="form-group row">                                           
                <input type="submit" name="Submit" class="btn btn-light" value="Edit Data"></input>            
            </div>
        </form>
    </div>  
    @endsection