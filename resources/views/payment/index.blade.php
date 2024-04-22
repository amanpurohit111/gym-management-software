@extends('layouts.app')
@section('bread')

<div class="breadcrumb-text">
    <h2>Member View</h2>
    <div class="bt-option">
        <a href="/">Member</a>

        <span>View</span>
    </div>
</div>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-2">
            @include('layouts.leftbar')
        </div>
        <div class="col-9" style="border-radius: 6px; border:1px solid #444;box-shadow:1px 1px 5px #000;">
            <div class="card bg-transparent">
                <div class="card-header text-center">
                    <span style="color:#f36100">Members View</span>
                </div>
            </div>

            <div class="card-body leave-comment table-responsive" style="color:#f36100">
            <table class="table table-striped ">
             <thead>
                <tr>
                    <th style="color:#f36100">S.No</th>
                    <th style="color:#f36100">Action</th>
                    <th style="color:#f36100">Name</th>
                    <th style="color:#f36100">Mobile</th>
                    <th style="color:#f36100">Date of Join</th>
                    <th style="color:#f36100">Posted By</th>
                    <th style="color:#f36100">Created At</th>
                    <th style="color:#f36100">Updated At</th>
                    <th style="color:#f36100">Status</th>
                </tr>
             </thead>
             <tbody>
                @foreach($data as $info)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        @if($info['status']=='Activate')
                        <a href="/payment/{{$info['id']}}" class="btn btn-success">Fees</a>
                        @else
                        <a href="javascript:alert('User must be activate for Submiting fees')" class="btn btn-secondary">Fees</a>
                        @endif
                    </td>
                    <td>
                       <a href="/members/{{$info['id']}}/edit"> {{$info['name']}}</a>
                    </td>
                    <td>{{$info['mobile']}}</td>
                    <td>{{$info['doj']?date('m- D -y',strtotime($info['doj'])):N/A}}</td>
                    <td>{{$info->user->name}}</td>
                    <td>{{date('m- D -y',strtotime($info['Created_at']))}}</td>
                    <td>{{date('m- D -y',strtotime($info['Updated_at']))}}</td>
                    <td>
                        @if($info['status']=='Activate')
                        <b style="color:green">Activate</b>
                        @else
                        <b style="color:red">Deactivate</b>
                        @endif
                    </td>
                </tr>
                @endforeach
             </tbody>
            </table>

            </div>
        </div>
    </div>
</div>

@endsection