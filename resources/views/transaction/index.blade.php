@extends('template.main')
@section('title', 'Transaction List')
@section('container')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Table Transaction</h3>
                    <a class="btn btn-outline-primary rounded-pill " href="{{ Route('transaction.create') }}"><i
                            class="fa-solid fa-plus"></i>Add Transaction</a>
                     
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Transaction
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Amount</th>
                                <th>Time</th>
                                <th>Type</th>
                                <th>Product</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $t)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $t->title }}</td>
                                    <td>{{ $t->amount }}</td>
                                    <td>{{ $t->time }}</td>
                                    <td>{{ $t->type }}</td>
                                    <td>{{ $t->product->name }}</td>
                                    <td>
                                        <form action="{{ Route('transaction.destroy', $t->id) }}" method="post">
                                            <a href="{{ Route('transaction.edit', $t->id) }}" class="btn btn-outline-warning icon icon-left rounded-pill"><i
                                                    class="fa-solid fa-pen-to-square"></i> Edit</a>

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger icon icon-left rounded-pill" type="submit"><i
                                                    class="fa-solid fa-trash"></i></i> Delete</button>
                                        </form>
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    {{-- <div class="row">
        <div class="col-12 ">
            <a class="btn btn-primary rounded" href="{{ Route('transaction.create') }}">Add Transaction</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card rounded shadow">
                <div class="card-header">
                    <H3>List Transaction</H3>
                </div>
                <div class="card-body">
                    <table class="table table-danger table-responsive-md">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Amount</th>
                                <th>Time</th>
                                <th>Type</th>
                                <th>Product</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $t)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $t->title }}</td>
                                    <td>{{ $t->amount }}</td>
                                    <td>{{ $t->time }}</td>
                                    <td>{{ $t->type }}</td>
                                    <td>
                                       {{ $t->product->name }}
                                    </td>
                                    <td>
                                        <form action="{{ route('transaction.destroy', $t->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('transaction.show', $t->id) }}">Detail</a>
                                            <a class="btn btn-primary" href="{{ route('transaction.edit', $t->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
