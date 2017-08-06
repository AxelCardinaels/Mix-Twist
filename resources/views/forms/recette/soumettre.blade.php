<form  role="form" method="POST" action="{{ route('doMix') }}" class="content__form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form__part">
  <label for="plat1" class="form__label">Le premier ingrédient</label>
  <input class="input__text form__input" type="text" name="plat1" id="plat1" placeholder="Le premier ingrédient">
  </div>

  <div class="form__part">
    <label for="plat2" class="form__label">Le second ingrédient</label>
    <input class="input__text form__input" type="text" name="plat2" id="plat2" placeholder="Le second ingrédient">
  </div>

  <div class="form__part">
    <label for="pseudo" class="form__label">Votre surnom</label>
    <input class="input__text form__input" type="text" name="pseudo" id="pseudo" placeholder="Votre surnom">
  </div>

  <div class="form__part">
    <label for="pseudo" class="form__label">Votre adresse email</label>
    <input class="input__text form__input" type="text" name="email" id="email" placeholder="Votre adresse email">
  </div>

  <input type="submit bouton bouton--submit" value="Valider le mix!"/>

</form>
