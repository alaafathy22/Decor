@extends('layouts.app')
@section('content')
    <div class="head_home2">
        <h3>
            <a href="/" style="text-decoration: none;color: black">Decorista</a>
        </h3>
        <a type="button" class="btn btn-danger logout_button" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
            <i class="fas fa-power-off"></i>

        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <form action="{{ route('calcDistance') }}" method="POST" class="class_form_home2">
        @csrf
        <div class="container container_body_home2" id="container_body_home2">
            <div class="row justify-content-between" style="width: 100%;height: 100%;">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 text-center">
                        {{-- <label>نوع التشطيب</label> --}}
                        <select name="finishing_levels" id="" class="form-select" aria-label="نوع التشطيب"
                            required>
                            <option value="">نوع التشطيب</option>
                            @foreach ($finishing_levels as $key => $value_finishing_levels)
                                <option value="{{ $value_finishing_levels->id }}">{{ $value_finishing_levels->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-sm-12 text-center">
                        {{-- <label>حاله الوحدة</label> --}}
                        <select name="finishing_status" id="" class="form-select" aria-label="حاله الوحدة"
                            required>
                            <option value="">حاله الوحدة</option>
                            @foreach ($finishing_status as $key => $value_finishing_status)
                                <option value="{{ $value_finishing_status->id }}">{{ $value_finishing_status->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-sm-12 text-center">
                        {{-- <label>المحافظة</label> --}}
                        <select name="governorates" id="" class="form-select" aria-label="المحافظة" required>
                            <option value="">المحافظة</option>
                            @foreach ($governorates as $key => $value_governorates)
                                <option value="{{ $value_governorates->id }}">{{ $value_governorates->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row my_center_form" id="my_form">
                    @include('layouts/row_center_page', [
                        'id_row' => 'row_Select0',
                        'number_button_remove' => '0',
                        'reception' => '',
                        'room' => 'selected',
                        'torqa' => '',
                        'blqona' => '',
                        'bathroom' => '',
                        'kitchen' => '',
                    ])
                    {{-- -------------------------------- second --------------------------------------- --}}
                    @include('layouts/row_center_page', [
                        'id_row' => 'row_Select1',
                        'number_button_remove' => '1',
                        'reception' => '',
                        'room' => 'selected',
                        'torqa' => '',
                        'blqona' => '',
                        'bathroom' => '',
                        'kitchen' => '',
                    ])

                    {{-- -------------------------------- third --------------------------------------- --}}
                    @include('layouts/row_center_page', [
                        'id_row' => 'row_Select2',
                        'number_button_remove' => '2',
                        'reception' => 'selected',
                        'room' => '',
                        'torqa' => '',
                        'blqona' => '',
                        'bathroom' => '',
                        'kitchen' => '',
                    ])

                    {{-- -------------------------------- fourth --------------------------------------- --}}
                    @include('layouts/row_center_page',[
                        'id_row' => 'row_Select3',
                        'number_button_remove' => '3',
                        'reception' => '',
                        'room' => '',
                        'torqa' => 'selected',
                        'blqona' => '',
                        'bathroom' => '',
                        'kitchen' => '',
                    ])

                    {{-- -------------------------------- fifth --------------------------------------- --}}
                    @include('layouts/row_center_page',[
                        'id_row' => 'row_Select4',
                        'number_button_remove' => '4',
                        'reception' => '',
                        'room' => '',
                        'torqa' => '',
                        'blqona' => 'selected',
                        'bathroom' => '',
                        'kitchen' => '',
                    ])

                    {{-- -------------------------------- sixth --------------------------------------- --}}
                    @include('layouts/row_center_page', [
                        'id_row' => 'row_Select5',
                        'number_button_remove' => '5',
                        'reception' => '',
                        'room' => '',
                        'torqa' => '',
                        'blqona' => '',
                        'bathroom' => 'selected',
                        'kitchen' => '',
                    ])

                    {{-- -------------------------------- seventh --------------------------------------- --}}
                    @include('layouts/row_center_page', [
                        'id_row' => 'row_Select6',
                        'number_button_remove' => '6',
                        'reception' => '',
                        'room' => '',
                        'torqa' => '',
                        'blqona' => '',
                        'bathroom' => '',
                        'kitchen' => 'selected',
                    ])

                </div>

                <div class="row justify-content-center bottom_bar">
                    <div class="col-lg-4 col-sm-12">
                        <button id="add_row" type="button" class="btn btn-primary">اضافه غرفه جديدة</button>
                        <input type="submit" value="حساب التكلفه" type="button" class="btn btn-secondary">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
