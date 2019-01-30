

<select name="credit_card_expiry_month" class="form-control col-md-4" required>

@foreach($months as $key => $val)

    <option value="{{ $key }}">{{ $val }}</option>

@endforeach

</select>
