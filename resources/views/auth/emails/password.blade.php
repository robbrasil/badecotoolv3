Click Here to reset your passord: <br>

<a href="{{ $link = url('password/reset', $token).'?email=.urlencode($user->getEmailForPasswrdReset())' }}">{{ $link }}</a>