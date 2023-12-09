@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ url('products/post-step-three') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>

                    <div class="card-body">
                        
                            <table class="table">
                                <tr>
                                    <td> Nama:</td>
                                    <td><strong>{{$product->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td> Usia:</td>
                                    <td><strong>{{$product->amount}}</strong></td>
                                </tr>
                                <tr>
                                    <td> Keluhan:</td>
                                    <td><strong>{{$product->status ? 'bri' : 'bni'}}</strong></td>
                                </tr>
                                <tr>
                                    <td> Cara Bayar:</td>
                                    <td><strong>{{$product->description}}</strong></td>
                                </tr>
                                <tr>
                                    <td> Tanggal:</td>
                                    <td><strong>{{$product->stock}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ url('products/create-step-two') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection