@extends('templates.admin')

@section('content')
    <div class="row layout-top-spacing">
        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                            <h4>Tambah Data Mahasiswa</h4>
                        </div>
                        <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="post" action="{{route('mahasiswa.store')}}">
                        @csrf
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Nomor Induk Mahasiswa</label>
                            <div class="col-sm-8">
                                <input name="nim" type="number" value="{{old('nim')}}" class="form-control form-control-sm {{$errors->has('nim') ? 'is-invalid':''}}" id="colFormLabelSm" placeholder="">
                                @if ($errors->has('nim'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('nim') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input name="nama" type="text" value="{{old('nama')}}" class="form-control form-control-sm {{$errors->has('nama') ? 'is-invalid':''}}"  id="colFormLabelSm" placeholder="">
                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('nama') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input name="tempat_lahir" type="text" value="{{old('tempat_lahir')}}" class="form-control form-control-sm {{$errors->has('tempat_lahir') ? 'is-invalid':''}}" id="colFormLabelSm" placeholder="">
                                @if ($errors->has('tempat_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('tempat_lahir') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input name="tanggal_lahir" type="date" value="{{old('tanggal_lahir')}}" class="form-control form-control-sm {{$errors->has('tanggal_lahir') ? 'is-invalid':''}}" id="colFormLabelSm" placeholder="">
                                @if ($errors->has('tanggal_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('tanggal_lahir') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Alamat</label>
                            <div class="col-sm-8">
                                <textarea name="alamat" type="" class="form-control form-control-sm {{$errors->has('alamat') ? 'is-invalid':''}}" id="colFormLabelSm" placeholder="">{{old('alamat')}}</textarea>
                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('alamat') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Program Studi</label>
                            <div class="col-sm-8">
                                <select name="program_study" class="form-control form-small" required>
                                    <option selected="selected">...</option>
                                    @foreach($prodi as $p)
                                    <option value="{{$p->id}}" {{$p->id == old('program_study') ? 'selected' : ''}} >{{$p->program_study}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Angkatan</label>
                            <div class="col-sm-8">
                                <input name="angkatan" type="number" value="{{old('angkatan')}}" class="form-control form-control-sm {{$errors->has('angkatan') ? 'is-invalid':''}}" id="colFormLabelSm" placeholder="">
                                @if ($errors->has('angkatan'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('angkatan') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <select name="jenis_kelamin" class="form-control  basic">
                                    <option selected="selected">-Pilih-</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                @if ($errors->has('jenis_kelamin'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('jenis_kelamin') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">No. Hp</label>
                            <div class="col-sm-8">
                                <input name="no_hp" type="number" value="{{old('no_hp')}}" class="form-control form-control-sm {{$errors->has('no_hp') ? 'is-invalid':''}}" id="colFormLabelSm" placeholder="">
                                @if ($errors->has('no_hp'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('no_hp') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Jalur</label>
                            <div class="col-sm-8">
                                <select name="jalur" class="form-control  basic">
                                    <option selected="selected">-Pilih-</option>
                                    <option>Reguler</option>
                                    <option>Ekstensi</option>
                                </select>
                                @if ($errors->has('jalur'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('jalur') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mr-lg-5">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm ">Email</label>
                            <div class="col-sm-8">
                                <input name="email" type="email" value="{{old('email')}}" class="form-control form-control-sm {{$errors->has('email') ? 'is-invalid':''}}" id="colFormLabelSm" placeholder="">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('email') }}</b></p>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2 float-right">Save</button>
                        <button class="btn btn-warning submit-fn mt-2 mr-2 float-right"  type="button" onclick="history.back()">Cancel</button>
                    </form>
            </div>
        </div>
    </div>
    </div>
    @endsection
