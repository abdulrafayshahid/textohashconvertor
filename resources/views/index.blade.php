<h1>Password Changer</h1>
<form class="cf" action="{{ url('/') }}" method="post">
@csrf
  <div class="half left cf mb-5">
    <input type="text" id="input-name" placeholder="Password">
    <input type="text" id="input-email" placeholder="Hashed Password" value="{{ isset($hashedPassword) ? $hashedPassword : '' }}" readonly>
  </div> 
  <input class="mt-5" type="submit" value="Show" id="input-submit">
</form>