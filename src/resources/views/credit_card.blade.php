
<div class="row">
    <div class="col-md-6">
        <label>{{ trans('paydibs::label.card_holder') }}</label>
        <input type="text" class="form-control" name="credit_card_holder" required />
    </div>

    <div class="col-md-6">
        <label>{{ trans('paydibs::label.card_no') }}</label>
        <input type="text" class="form-control" name="credit_card_no" required minlength=16 maxlength=16/>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <label>{{ trans('paydibs::label.expiry_date') }}</label>
        <div class="row col-md-12" style="margin-top:0">
            @include("paydibs::components.dropdown-month") 
            <span class="col-md-1">/</span>
            @include("paydibs::components.dropdown-year")
        </div>
    </div>

    <div class="col-md-2">
        <label>{{ trans('paydibs::label.cvv') }}</label>
        <input type="text" class="form-control" name="credit_card_cvv" required minlength="3" maxlength="3"/>
    </div>
</div>
