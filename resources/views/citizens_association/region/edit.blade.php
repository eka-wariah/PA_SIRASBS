@extends('citizens_association.master_CitizenAssociation')

@push('link')
    
@endpush

@section('title')
    SiTAW | Tambah Kategori
@endsection

@section('content')
   <div class="row">
    <div class="col-lg-12">
        <div class="card">
          <div class="px-4 py-3 border-bottom">
            <h4 class="card-title mb-0">Tambah Kategori</h4>
          </div>
          <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="mb-4 row align-items-center">
                  <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Lingkup Wilayah</label>
                  <div class="col-sm-9">
                    <input type="text" name="rgn_level" value="{{$editRegions->rgn_level}}" class="form-control" id="exampleInputText1"  required oninvalid="this.setCustomValidity('Nama Jurusan Wajib Diisi')" 
                    onchange="this.setCustomValidity('')">
                  </div>
                  @error('rgn_level')
                    <div>error</div>
                  @enderror
                </div>
                <div class="mb-4 row align-items-center">
                  <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Nomor</label>
                  <div class="col-sm-9">
                    <input type="number" name="rgn_number" value="{{$editRegions->rgn_number}}" class="form-control" id="exampleInputText1"  required oninvalid="this.setCustomValidity('Nama Jurusan Wajib Diisi')" 
                    onchange="this.setCustomValidity('')">
                  </div>
                  @error('rgn_number')
                    <div>error</div>
                  @enderror
                </div>
                
                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" value="Kirim" id="">
                  </div>
                </div>
              </div>
          </form>
          
        </div>
      </div>
   </div>
    
@endsection



@push('script')
    
@endpush
