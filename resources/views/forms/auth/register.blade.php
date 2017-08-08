<div class="wrapper--form">

  @if (count($errors) > 0)
        <div class="form__error error--bordered alert__container alert--error">
            <p class="alert__message">Oups, il y a <span class="alert__count">{{ count($errors) }}</span> soucis !</p>
            <ul>
                @foreach ($errors->all() as $error)
                <li class="alert__item">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
  <form class="content__form" method="POST" action="{{ route('doRegister') }}">
    {{ csrf_field() }}
    <div class="form__part">
      <label for="name" class="form__label">Votre pseudo</label>
      <input id="name" type="text" class="form__input input__text" name="name" placeholder="Votre pseudo" value="{{ old('name') }}" required />
    </div>
    <div class="form__part">
        <label for="email" class="form__label">Votre adresse email</label>
        <input id="email" type="email" class="form__input input__text" name="email" placeholder="Votre adresse email" value="{{ old('email') }}" required />
    </div>

    <div class="form__part">
        <label for="password" class="form__label">Mot de passe</label>
        <input id="password" type="password" class="form__input input__text" name="password" placeholder="Votre mot de passe" required/>
    </div>

    <div class="form__part">
        <label for="password_confirmation" class="form__label">Confirmer votre mot de passe</label>
        <input id="password_confirmation" type="password" class="form__input input__text" name="password_confirmation" placeholder="Votre mot de passe" required/>
    </div>

    <input type="submit" class="bouton bouton--submit" value="S'enregistrer"/>
</div>
