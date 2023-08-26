<div>
    <div class="row row_select_length my_center_form_Second_inside" id="{{ $id_row }}">
        <div class="col-lg-2 col-sm-3 custom_row_col_in_mobile">
            {{-- <label>نوع الغرفه</label> --}}
            <select name="distance[]" class="form-select select_in_mobile">
                <option value="" {{ $reception }}>ريسيبشن</option>
                <option value="" {{ $room }}>غرفه</option>
                <option value="" {{ $torqa }}>طرقه</option>
                <option value="" {{ $blqona }}>بلكونة</option>
                <option value="" {{ $bathroom }}>حمام</option>
                <option value="" {{ $kitchen }}>مطبخ</option>
            </select>
        </div>
        <div class="col-lg-4 col-sm-3 custom_row_col_in_mobile">
            <input id="height" type="number" wire:model="height" name="height[]" placeholder="الطول"
                class="form-control" required>
        </div>
        <div class="col-lg-4 col-sm-3 custom_row_col_in_mobile">
            <input id="width" type="number" wire:model="width" name="width[]" placeholder="العرض"
                class="form-control" required>
        </div>
        {{-- <input type="hidden" name="res_dis[]"> --}}
        <input type="hidden" value="{{ $id_establishment_type }}" name="establishment_type_id">
        <button type="button" class="btn btn-danger button_delete_in_mobile button_delete_in_PC" name="button_delete[]"
            id="button_delete" onclick="removeRow(event,{{ $number_button_remove }})"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-trash3" viewBox="0 0 16 16">
                <path
                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
            </svg></button>
        <input type="text" wire:model="result_multi" id="result_multi">
    </div>

</div>
