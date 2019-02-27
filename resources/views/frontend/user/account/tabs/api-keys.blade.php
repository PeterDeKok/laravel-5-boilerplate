<div class="table-responsive">
    <h3>My tokens</h3>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>@lang('labels.frontend.user.api_keys.name')</th>
            <th>@lang('labels.frontend.user.api_keys.scopes')</th>
        </tr>

        @if($logged_in_user->tokens->count())
            @foreach($logged_in_user->tokens as $token)
                <tr>
                    <th>{{ $token->name }}</th>
                    <td>{{ implode(',', $token->scopes) }}</td>
                </tr>
            @endforeach
        @endif
    </table>

    <h5>TODO</h5>

    PasswordGrant<br />
    PersonalAccessGrant<br />
    AuthCodeGrant<br />
    ClientCredentialsGrant<br />
</div>
