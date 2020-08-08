@extends('home')
@section('post_blog')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
               
                <div class="card-header"> Post</div>
                <card-body>
                    
                    <form action="{{ route('add.post') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @include('admin.partial.form-control',['add'=> 'Tambah'])
                      </form>
                </card-body>
            </div>
        </div>
    </div>
</div>
@endsection