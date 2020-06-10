@extends('master')
@section('judul', 'CRUD Laravel | Beranda')
@section('konten')
    <div class="row mx-auto justify-content-between p-3">
        <div class="col-5 mx-auto">          
            <a href="/tambah" class="btn btn-block btn-light">
                Tambahkan Mahasiswa
            </a> 
        </div>               
    </div>    
@if($message = Session::get('message'))
    <h1 class="text-center">{{$message}}</h1>
@else
<table class="text-white" style="width:100%;">
        <tr>
        <th >No.</th>
        <th >Nama Mahasiswa</th>        
        <th >jenis Kelamin</th>
        <th >NIM</th>
        <th >Nama Dosen</th>
        <th colspan="2">Aksi</th>
    </tr>    
    <?php $i=1;?>    
    @foreach($mahasiswa as $mhs)          
    <tr >
        <td class="cntr"><?php echo $i;?></td>
        <td >{{$mhs->nama}}</td>
        <td class="cntr">{{$mhs->jk}}</td>        
        <td class="cntr">{{$mhs->nim}}</td>
        <td >{{$mhs->dosen->nama}}</td>
        <td class="cntr">
            <a class="edit" href="/edit/id={{$mhs->id}}">
                <i class="fa fa-pencil-square" aria-hidden="true"></i>                            
            </a>
        </td>
        <td class="cntr">
            <a class="trash" href="/hapus/id={{$mhs->id}}">
                <i class="fa fa-trash" aria-hidden="true"></i>                            
            </a>
        </td>     
    </tr>   
        <?php ++$i;?>         
    @endforeach
@endif

@endsection