@extends('dashboard.layouts.app')

@section('content')

<main id="main">

  <div class="block"></div>

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12">
          <p class="mb-5">
           
          </p>
          <div class="table-responsive" >
          <a href="{{ route('guzzle.form') }}"><button class="btn btn-primary btn-sm">TAMBAH DATA</button></a>
            <table  id="document_table" class="table" style="width: 100%;" >
              <thead>
                <tr>
             
                  <th>Nama Produk</th>
                  <th>Jumlah Produk</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach($list_produk as $item)
                    <tr>
                      <td> {{$item->nama_produk}} </td>
                      <td> {{$item->jumlah_produk}} </td>
                      <td> {{$item->harga}} </td>
                      <td>
                      <a href="/list-produk/{{$item->id}}"><button class="btn btn-warning btn-sm">EDIT</button></a>
                      <a href="/list-produk/{{$item->id}}/delete"><button class="btn btn-danger btn-sm">DELETE</button></a>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Counts Section -->

</main><!-- End #main -->  
@endsection