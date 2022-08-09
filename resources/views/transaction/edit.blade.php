@extends('template.main')
@section('title', 'Edit Transaction')
@section('container')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Data</h4>
                <a href="{{ route('transaction.index') }}" class="btn btn-outline-primary rounded-pill "><i
                        class="fa-solid fa-angle-left"></i>Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ url('/transaction/' .$transaction->id) }}" method="POST">
                @csrf
                @method('patch')
                <form>
                    <div class="col-md-4">
                        <label>Title</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $transaction->title }}"
                                    id="first-name-icon">
                                <div class="form-control-icon">
                                    <i class="bi bi-patch-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Amount</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="number" class="form-control" placeholder="Amount" name="amount" value="{{ $transaction->amount }}"
                                    id="first-name-icon">
                                <div class="form-control-icon">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Product</label>
                    </div>
                    <div class="col-md-8">
                        <fieldset class="form-group">
                            <div class="position-relative">
                                <select class="form-select" id="basicSelect" name="product_id" value="{{ $transaction->product_id }}">
                                    <option selected>Select Product</option>
                                    <option value="1">Rice</option>
                                    <option value="2">Fish</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-4">
                        <label>Time</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Time" name="time" value="{{ $transaction->time }}">
                                <div class="form-control-icon">
                                    <i class="bi bi-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Type</label>
                    </div>
                    <div class="col-md-8">
                        <fieldset class="form-group">
                            <div class="position-relative">
                                <select class="form-select" id="basicSelect" name="type" value="{{ $transaction->type }}">
                                    <option value="expense">Expense</option>
                                    <option value="revenue">Revenue</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                </form>
            </form>
        </div>
    </div>
@endsection



