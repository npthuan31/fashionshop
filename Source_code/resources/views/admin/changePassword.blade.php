@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tài khoản Admin</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Đổi password
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form autocomplete="off" role="form" method="post" action="{{route('admin.changePassword')}}">
                                    <div class="form-group">
                                        <label>Password cũ</label>
                                        <input autocomplete="off" type="password" class="form-control" name="old_password" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password mới</label>
                                        <input type="password" class="form-control" name="new_password" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại password mới</label>
                                        <input type="password" class="form-control" name="new_password_confirmation" value="">
                                    </div>
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-success">Xác nhận</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection
