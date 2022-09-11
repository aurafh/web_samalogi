  <div class="card">
    <h3 class="card-header">
        Hi, You have an email from your Website!
    </h3>
    <div class="card-body">
      <h5 class="card-title">From   : {{ $fromName }}</h5>
      <h5 class="card-title">Email  : {{ $fromEmail }}</h5>
      <p class="card-text">{{ $body }}</p>
    </div>
  </div>
