<section class="mb-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Profile Information') }}</h3>
        </div>

        <div class="card-body">
            <p class="text-muted">
                {{ __("Update your account's profile information and email address.") }}
            </p>

            <!-- Email Verification Form -->
            <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <!-- Profile Update Form -->
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <!-- Name -->
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" id="name" name="name" class="form-control"
                        value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                    @if ($errors->has('name'))
                        <span class="text-danger small">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" class="form-control"
                        value="{{ old('email', $user->email) }}" required autocomplete="username">
                    @if ($errors->has('email'))
                        <span class="text-danger small">{{ $errors->first('email') }}</span>
                    @endif

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div class="mt-2">
                            <p class="text-warning small">
                                {{ __('Your email address is unverified.') }}
                                <button type="submit" form="send-verification"
                                    class="btn btn-link p-0 align-baseline text-warning text-decoration-underline">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="text-success small">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Save Button -->
                <div class="form-group d-flex align-items-center justify-content-between">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>

                    @if (session('status') === 'profile-updated')
                        <p class="text-success small mb-0 ml-3" id="profileUpdatedMessage">
                            {{ __('Saved.') }}
                        </p>

                        <script>
                            setTimeout(() => {
                                document.getElementById('profileUpdatedMessage')?.remove();
                            }, 2000);
                        </script>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
