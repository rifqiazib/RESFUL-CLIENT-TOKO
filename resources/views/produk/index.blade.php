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
          <div class="table-responsive">
          <a href="route()"><button class="btn btn-warning btn-sm">EDIT</button></a>
            <table id="document_table" class="hover" style="width: 100%;">
              <thead>
                <tr>
             
                  <th>Nama Produk</th>
                  <th>Jumlah Produk</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($barang as $item)
                    <tr>
                      <td>{{ $item['nama_produk'] }}</td>
                      <td>{{ $item['jumlah_produk'] }}</td>
                      <td>{{ $item['harga'] }}</td>
                      <td>
                      <a href="#"><button class="btn btn-warning btn-sm">EDIT</button></a>
                      <a href="#"><button class="btn btn-danger btn-sm">DELETE</button></a>
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