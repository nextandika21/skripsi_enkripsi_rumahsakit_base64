@extends('layouts.master')
@section('title', 'Patient Profile')

@section('content')
    <div class="grid_12 full_block">
        <div class="widget_wrap">
            <div class="widget_top">
                <span class="h_icon list_image"></span>
                <h6>Patient Profile</h6>
            </div>
            <div class="widget_content">
            <form action="/console/patient/profile/{{$patient->id}}" method="POST" class="form_container left_label" autocomplete="off">
                    @csrf
                    <ul>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">NIK</label>
                                <div class="form_input">
                                    <input name="nik" type="text" tabindex="1" class="limiter" value="{{$patient->nik}}" disabled/>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">Nama</label>
                                <div class="form_input">
                                    <input name="nama" type="text" tabindex="1" class="limiter" value="{{$patient->nama}}" required/>
                                    @if($errors->has('nama'))
                                        <span class="input_instruction red">{{$errors->first('nama')}}</span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">Tanggal Lahir</label>
                                <div class="form_input">
                                    <div class=" form_grid_2 alpha">
                                        <input name="tanggal_lahir" type="text" class="datepicker" value="{{$patient->tanggal_lahir}}" required/>
                                        <span class=" label_intro">MM/dd/yyyy</span>
                                    </div>
                                    @if($errors->has('tanggal_lahir'))
                                        <span class="input_instruction red">{{$errors->first('tanggal_lahir')}}</span>
                                    @endif
                                    <span class="clear"></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">Jenis Kelamin</label>
                                <div class="form_input">
                                    <span>
										<input name="jenis_kelamin" class="radio" type="radio" value="Pria" tabindex="10" @if($patient->jenis_kelamin == "Pria") checked @endif>
										<label class="choice">Pria</label>
                                    </span>
                                    <span>
										<input name="jenis_kelamin" class="radio" type="radio" value="Wanita" tabindex="10" @if($patient->jenis_kelamin == "Wanita") checked @endif>
										<label class="choice">Wanita</label>
									</span>
                                    @if($errors->has('jenis_kelamin'))
                                        <span class="input_instruction red">{{$errors->first('jenis_kelamin')}}</span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">Alamat</label>
                                <div class="form_input">
                                    <textarea name="alamat" class="input_grow" cols="80" rows="5" tabindex="5" required>{{$patient->alamat}}</textarea>
                                    @if($errors->has('alamat'))
                                        <span class="input_instruction red">{{$errors->first('alamat')}}</span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">Nomor HP</label>
                                <div class="form_input">
                                    <input name="nomor_hp" type="text" id="mobile" value="{{$patient->nomor_hp}}" required/>
                                    @if($errors->has('nomor_hp'))
                                        <span class="input_instruction red">{{$errors->first('nomor_hp')}}</span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form_grid_12">
                                <div class="form_input">
                                    <button type="submit" class="btn_small btn_blue"><span>Save Changes</span></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function() {
            var success = '@if (Session::has("success")){{ Session::get("success") }}@endif';
            var error = '@if (Session::has("error")){{ Session::get("error") }}@endif';

            if(success){
                var noty_id = noty({
                    layout : 'top',
                    text: success,
                    modal : true,
                    type : 'success', 
                });
            }
            if(error){
                var noty_id = noty({
                    layout : 'top',
                    text: error,
                    modal : true,
                    type : 'error', 
                });
            }
        });
    </script>
@stop