@extends('layouts.master')
@section('title', 'Patient')

@section('content')
    <div class="grid_12">
        <div class="widget_wrap">
            <div class="widget_top">
                <span class="h_icon blocks_images"></span>
                <h6>Table Patient</h6>
            </div>
            <div class="widget_content">
                <div class="btn_30_blue">
                    <a href="/console/patient/add" title="Add Patient"><span class="icon add_co"></span><span class="btn_link">Add Patient</span></a>
                </div>
                <table id="table_patient" class="display data_tbl">
                    <thead>
                        <tr>
                            <th>
                                NIK
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Tanggal Lahir
                            </th>
                            <th>
                                Jenis Kelamin
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                Nomor HP
                            </th>
                            <th>
                                Last Updated
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patient as $p)
                            <tr>
                                <td class="center">
                                    {{$p->nik}}
                                </td>
                                <td class="center">
                                    {{$p->nama}}
                                </td>
                                <td class="center">
                                    {{$p->tanggal_lahir}}
                                </td>
                                <td class="center">
                                    {{$p->jenis_kelamin}}
                                </td>
                                <td class="center">
                                    {{$p->alamat}}
                                </td>
                                <td class="center">
                                    {{$p->nomor_hp}}
                                </td>
                                <td class="center">
                                    {{$p->updated_at}}
                                </td>
                                <td class="center">
                                    <div class="btn_30_light">
                                        <a href="#" title="Delete Patient" onclick="Delete({{$p->id}})"><span class="icon delete_co"></span></a>
                                    </div>
                                    <div class="btn_30_light">
                                        <a href="/console/patient/profile/{{$p->id}}" title="Edit Patient"><span class="icon application_edit_co"></span></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                NIK
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Tanggal Lahir
                            </th>
                            <th>
                                Jenis Kelamin
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                Nomor HP
                            </th>
                            <th>
                                Last Updated
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </tfoot>
                </table>
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

        function Delete(id){
            $.confirm({
                'title'		: 'Hapus Patient',
                'message'	: 'Apakah anda yakin ingin menghapus data patient ini ?',
                'buttons'	: {
                    'Ya'	: {
                        'class'	: 'yes',
                        'action': 
                        function(){
                            $.ajax
                            ({
                                type: 'GET',
                                url: "/console/patient/delete/"+id,
                                dataType: 'json',
                                success: function(response)
                                {
                                    if(response == "berhasil"){
                                        location.reload(true);
                                    }
                                }
                            });
                        }
                    },
                    'Tidak'	: {
                        'class'	: 'no',
                    }
                }
            });
        }
    </script>
@stop