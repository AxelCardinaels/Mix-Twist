<div class="wrapper--form">
  @if (count($errors) > 0)
        <div class="form__error error--bordered alert__container alert--error">
            <p class="alert__message">Oups, il y a <span class="alert__count">{{ count($errors) }}</span> soucis dans votre mix !</p>
            <ul>
                @foreach ($errors->all() as $error)
                <li class="alert__item">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

<form  role="form" method="POST" action="{{ route('doMix') }}" class="content__form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form__part">
  <label for="plat1" class="form__label">Le premier ingrédient</label>
  <input class="input__text form__input" type="text" name="plat1" id="plat1" placeholder="Le premier ingrédient" value="{{ old('plat1') }}">
  </div>

  <div class="form__part">
    <label for="plat2" class="form__label">Le second ingrédient</label>
    <input class="input__text form__input" type="text" name="plat2" id="plat2" placeholder="Le second ingrédient" value="{{ old('plat2') }}">
  </div>


  <input type="submit" class="bouton bouton--submit" value="Valider le mix!"/>

</form>
</div>
