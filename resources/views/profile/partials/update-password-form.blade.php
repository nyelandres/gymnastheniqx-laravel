<section class="mb-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Update Password') }}</h3>
        </div>

        <div class="card-body">
            <p class="text-muted mb-4">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                @method('PUT')

                <!-- Current Password -->
                <div class="form-group">
                    <label for="update_password_current_password">{{ __('Current Password') }}</label>
                    <input type="password" name="current_password" id="update_password_current_password"
                        class="form-control" autocomplete="current-password">
                    @if ($errors->updatePassword->has('current_password'))
                        <span class="text-danger small">{{ $errors->updatePassword->first('current_password') }}</span>
                    @endif
                </div>

                <!-- New Password -->
                <div class="form-group">
                    <label for="update_password_password">{{ __('New Password') }}</label>
                    <input type="password" name="password" id="update_password_password" class="form-control"
                        autocomplete="new-password">
                    @if ($errors->updatePassword->has('password'))
                        <span class="text-danger small">{{ $errors->updatePassword->first('password') }}</span>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" id="update_password_password_confirmation"
                        class="form-control" autocomplete="new-password">
                    @if ($errors->updatePassword->has('password_confirmation'))
                        <span
                            class="text-danger small">{{ $errors->updatePassword->first('password_confirmation') }}</span>
                    @endif
                </div>

                <!-- Save Button & Feedback -->
                <div class="form-group d-flex align-items-center justify-content-between">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>

                    @if (session('status') === 'password-updated')
                        <p class="text-success small mb-0 ml-3" id="passwordUpdatedMessage">{{ __('Saved.') }}</p>

                        <script>
                            setTimeout(() => {
                                document.getElementById('passwordUpdatedMessage')?.remove();
                            }, 2000);
                        </script>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
