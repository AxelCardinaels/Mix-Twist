<div class="wrapper--form">
  <form class="content__form" method="POST" action="{{ route('doLogin') }}">
      {{ csrf_field() }}

      @if (count($errors) > 0)
            <div class="form__error error--bordered alert__container alert--error">
                <p class="alert__message">Oups, il y a <span class="alert__count">{{ count($errors) }}</span> soucis</p>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="alert__item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

      <div class="form__part">
          <label for="email" class="form__label">Votre adresse email</label>
          <input id="email" type="email" class="form__input input__text" name="email" placeholder="Votre adresse email" value="{{ old('email') }}" required/>
      </div>

      <div class="form__part">
          <label for="password" class="form__label">Votre mot de passe</label>
          <input id="password" type="password" class="input__text form__input" name="password" placeholder="Votre mot de passe" required/>
      </div>

      <div class="form__part">
        <label class="form__label">
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="form__checkbox"/> Se souvenir de moi
        </label>
      </div>

      <input type="submit" class="bouton bouton--submit" value="Se connecter"/>
      <a href="{{url("/register")}}" class="bouton bouton--account" title="Créer un compte">Créer un compte</a>
    </form>

</div>
