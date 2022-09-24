@extends('layouts.master')
@section('title', 'User')

@section('content')
    <div class="grid_12">
        <div class="widget_wrap">
            <div class="widget_top">
                <span class="h_icon blocks_images"></span>
                <h6>Table User</h6>
            </div>
            <div class="widget_content">
                <div class="btn_30_blue">
                    <a href="/console/user/add" title="Add User"><span class="icon add_co"></span><span class="btn_link">Add User</span></a>
                </div>
                <table id="table_user" class="display data_tbl">
                    <thead>
                        <tr>
                            <th>
                                Photo
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Name
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
                        @foreach($user as $u)
                            <tr>
                                <td class="center">
                                    <img src="{{asset('storage/'.Auth::user()->photo)}}" width="50" height="50" alt="{{Auth::user()->name}}">
                                </td>
                                <td class="center">
                                    {{$u->email}}
                                </td>
                                <td class="center">
                                    {{$u->name}}
                                </td>
                                <td class="center">
                                    {{$u->updated_at}}
                                </td>
                                <td class="center">
                                    <div class="btn_30_light">
                                        <a href="#" title="Delete User" onclick="Delete({{$u->id}})"><span class="icon delete_co"></span></a>
                                    </div>
                                    <div class="btn_30_light">
                                        <a href="/console/user/profile/{{$u->id}}" title="Edit User"><span class="icon application_edit_co"></span></a>
                                    </div>
                                    <div class="btn_30_light">
                                        <a href="/console/user/changepassword/{{$u->id}}" title="Edit User"><span class="icon key_co"></span></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                Photo
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Name
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
                'title'		: 'Hapus User',
                'message'	: 'Apakah anda yakin ingin menghapus data user ini ?',
                'buttons'	: {
                    'Ya'	: {
                        'class'	: 'yes',
                        'action': 
                        function(){
                            $.ajax
                            ({
                                type: 'GET',
                                url: "/console/user/delete/"+id,
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