@extends('layouts.master')
@section('title', 'User Profile')

@section('content')
    <div class="grid_12 full_block">
        <div class="widget_wrap">
            <div class="widget_top">
                <span class="h_icon list_image"></span>
                <h6>User Profile</h6>
            </div>
            <div class="widget_content">
                <form action="/console/user/profile/{{$user->id}}" method="POST" enctype="multipart/form-data" class="form_container left_label">
                    @csrf
                    <ul>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">Email</label>
                                <div class="form_input">
                                    <input name="email" type="email" tabindex="1" class="limiter" value="{{$user->email}}" disabled />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">Name</label>
                                <div class="form_input">
                                    <input name="name" type="text" tabindex="1" class="limiter" value="{{$user->name}}" required/>
                                    @if($errors->has('name'))
                                        <span class="input_instruction red">{{$errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form_grid_12">
                                <label class="field_title">Photo</label>
                                <div class="form_input">
                                    <input type="file" id="photo" name="photo" accept="image/png, image/jpeg">
                                    @if($errors->has('photo'))
                                        <span class="input_instruction red">{{$errors->first('photo')}}</span>
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