@extends('layouts.main')

@section('content')
    <div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <form method="post">
                    @csrf
                    <p class="h3">Увидели объявление с адресом <span class="text-primary">inkey.info</span> и телефоном?</p>
                    <p class="h4">Укажите телефон, чтобы увидеть объявление полностью</p>
                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-lg" name="phone" id="phone" placeholder="Номер телефона">
                        </div>
                        <div class="col-auto">
                            <input  class="form-control btn-primary btn-lg" type="submit" value="Найти объявление">
                        </div>
                    </div>
                    <p class="h4 mt-4">Хотите бесплатно разместить здесь информацию о своих товарах, услугах или объектах? <a href="/promo/">Узнайте подробности</a></p>
                    <p class="h4 mt-4">&nbsp;</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
