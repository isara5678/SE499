@extends('layouts.admin-layout')
@section('title', 'Profile')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Profile</h1>
    </div>
</div>
<!--/.row-->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">Edit Profile</div>
            <div class="panel-body">
                <form class="form-horizontal row-border was-validated" method="post" action="{{route('profile.update', $user->user_id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="first_name" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-8">
                            <input class="form-control" value="{{$user->first_name}}" type="text" name="first_name"
                                id="first_name" placeholder="Your First Name" autocomplete="first_name" autofocus
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-8">
                            <input class="form-control" value="{{$user->last_name}}" type="text" name="last_name"
                                id="last_name" placeholder="Your Last Name" autocomplete="last_name" autofocus
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="major" class="col-md-3 control-label">Major</label>
                        <div class="col-md-8">
                            <select class="form-control" name="major" id="major" required autocomplete="major"
                                autofocus>
                                <option {{ $user->major == 'SE' ? ' selected ' : ' ' }} value="SE">SE</option>
                                <option {{ $user->major == 'CS' ? ' selected ' : ' ' }} value="CS">CS</option>
                                <option {{ $user->major == 'FS' ? ' selected ' : ' ' }} value="FS">FS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="col-md-3 control-label">Tel</label>
                        <div class="col-md-8">
                            <input id="tel" type="number" class="form-control @error('tel') is-invalid @enderror"
                                name="tel" value="{{ $user->tel }}" minlength="10" maxlength="10"
                                placeholder="Your Phone Number" required autocomplete="tel" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-8">
                            <input class="form-control" value="{{$user->email}}" type="email" name="email" id="email"
                                autocomplete="email" autofocus required placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_image" class="col-md-3 control-label">Profile Picture</label>
                        <div class="col-md-8 costom-file">
                            <input type="file" name="user_image" class="form-control custom-file-input" id="user_image"
                                accept=".png, .jpg, .jpeg" autocomplete="user_image" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <center>
                                <button type="submit" class="btn btn-primary" value="Save">Update</button>
                                <a href="{{url('admin/home')}}" class="btn btn-danger">Cancle</a>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
@endsection